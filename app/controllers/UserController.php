<?php

class UserController extends BaseController {

	public function showRole(){
		$roles = Role::orderBy('id','desc')->paginate(20);
		return View::make('admin.users.roles.list',array('roles'=>$roles));
	}

	//add role
	public function addRole(){
		$validator = Validator::make(Input::all(),array(
			'name' => 'required',
		));
		if($validator->passes()){
			$role = new Role;
			$role->name = Input::get('name');
			$role->save();
			return Redirect::to('admin/user/roles/list')->with('success', 'Create successed!');
			
		}
		else{
			return Redirect::to('admin/user/roles/list')->withErrors($validator)->withInput();
		}
	}

	//delete role

	public function deleteRole($id){
		$role = Role::find($id);
		$role->delete();
	}

	//edit role

	public function showEditRole($id){
		return View::make('admin.users.roles.edit')->render();;
	}
	public function editRole($id){
		$role = Role::find($id);
		return View::make('admin.users.roles.list',array('role'=>$role));
	}

	//list user
	public function showUser(){
		$users = User::orderBy('id','desc')->paginate(20);
		return View::make('admin.users.list',array('users'=>$users));
	}

	//add user
	public function addUser(){
		return View::make('admin.users.add');
	}

	public function createUser(){
		$rule = array(
			'username'=>'required|min:5|max:30|unique:users',
			'name'=>'required',
			'password'=>'required|confirmed|min:6|max:36',
			'address'=>'required',
			'password_confirmation'=>'required|min:6|max:30',
			'avatar'=>'image',
			'email'=>'required|email'
		);
		$validator = Validator::make(Input::all(),$rule);
		if($validator->passes()){
			$user = new User;
			$user->username = Input::get('username');
			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->password = Hash::make(Input::get('password'));
			$user->address = Input::get('address');
			$user->active = 1;
			if($user->save()){
				if(Input::hasFile('avatar')){
					$avatar = Input::file('avatar');
					$mime = $avatar->getClientOriginalExtension();
					$rename = rand(1111,9999).'.'.$mime;
				    $filename = $avatar->move('uploads/user/'.$user->id.'/', $rename);
				    $filename = 'uploads/user/'.$user->id.'/'. $rename;
				    // return $filename;
				    $user->avatar = $filename;
				    $user->save();
				}
			}
			$roleuser = new UserRole;
			$roleuser->role_id = 2;
			$roleuser->user_id = $user->id;
			$roleuser->save();

			

			return Redirect::to('admin/user/list')->with('success', 'Create successed!');
		}
		else{
			return Redirect::to('admin/user/add')->withErrors($validator)->withInput();
		}
	}

	//edit user
	public function editUser($id){
		$user = User::find($id);
		return View::make('admin.users.edit',array('user'=>$user));
	}

	public function updateUser(){
		$id = Input::get('id');
		$rule = array(
			'username'=>'required|min:5|max:30',
			'name'=>'required',
			'address'=>'required',
			'avatar'=>'image',
			'email'=>'required|email'
		);
		$validator = Validator::make(Input::all(),$rule);
		if($validator->passes()){
			$user = User::find($id);
			$user->username = Input::get('username');
			$user->name = Input::get('name');
			$user->email = Input::get('email');
			$user->address = Input::get('address');
			if($user->save()){
				if(Input::hasFile('avatar')){
					if(File::exists($user->avatar))
						File::delete($user->avatar);
					$avatar = Input::file('avatar');
					$mime = $avatar->getClientOriginalExtension();
					$rename = rand(1111,9999).'.'.$mime;
					$path = '/uploads/'.$user->id.'/';
				    $filename = $avatar->move('uploads/user/'.$user->id.'/', $rename);
				    $filename = 'uploads/user/'.$user->id.'/'. $rename;
				    // return $filename;
				    $user->avatar = $filename;
				    $user->save();
				}
			}

			

			return Redirect::to('admin/user/list')->with('success', 'Create successed!');
		}
		else{
			return Redirect::to('admin/user/edit/'.$id)->withErrors($validator)->withInput();
		}
	}
	//login
	public function showPageLogin(){
		return View::make('login');
	}
	public function login(){
		$data = array(
			'username' => Input::get('username'),
			'password' => Input::get('password')
		);
		$remember = Input::has('remember');
		if(Auth::attempt($data,$remember)){
			$role = UserRole::where('user_id',Auth::user()->id)->first();
			if($role->role_id == "1")
				return Redirect::to('admin');
			else{
				return Redirect::to('/');
			}
				// return Redirect::to('/');

		}
		else{
			return Redirect::to('login')
	            ->with('error', 'Your username/password combination was incorrect.');
		}
	}

	//register user
	public function register(){
		$rule = array(
			'username' => 'required|unique:users|alpha',
			'email' => 'required|unique:users',
			'password' => 'required|confirmed|alpha'
		);
		$accept = Input::has('accept');
		$validator = Validator::make(Input::all(),$rule);
		if($accept){
			$code = str_random(60);
			if($validator->passes()){
				$user = new User;
				$user->username = Input::get('username');
				$user->email = Input::get('email');
				$user->password = Hash::make(Input::get('password'));
				$user->active = 0;
				$user->code = $code;
				// Mail::send('emails.active', array('link'=>URL::route('active-account',$code),'username'=>Input::get('username')), function($message){
			 //        $message->to(Input::get('email'), Input::get('username'))->subject('Activate your account!');
			 //    });
			 //    $user->save();
			    $roleuser = new UserRole;
				$roleuser->role_id = 2;
				$roleuser->user_id = $user->id;
				// $roleuser->save();
			    return Redirect::to('login')->with('register','Your register successed! Check email, auth register');
			    
			}
			else{
				return Redirect::to('login')->with('unregister','Register wrong!');
			}
		}
		else{
			return 'wrong';
		}
	}

	public function getActive($code){
		$user = User::where('code','=',$code)->where('active','=','0')->first();
		$user->active = true;
		$user->code = '';
		if($user->save()){
			if (Auth::login($user)) {
				return Redirect::to('/')
                	->with('slinkregister', 'You are successfully logged in with admin.'.Auth::user()->name);
			}
			// return Redirect::to('login')->with('linkregister', 'not  activation your account!');

		}
		
	}

}
