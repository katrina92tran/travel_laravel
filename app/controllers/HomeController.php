<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	// public function showWelcome()
	// {
	// 	return View::make('hello');
	// }
	public function showAdmin(){
		return View::make('admin.home');
	}

	public function showIndex(){
		return View::make('front.home');
	}
	public function showContant(){
		return View::make('front.contact');
	}
	public function sendContant(){
		if(Request::ajax()){
		$rule = array(
			'name' => 'required',
			'email' => 'required|email',
			'comment' => 'required'
		);
		$validator = Validator::make(Input::all(),$rule);
		if($validator->passes()){
			return Redirect::to('/contact')->with('success', 'Create successed!');
			// return Response::json(array('contact'=>$rule));
		
		}
		else{
			return Redirect::to('/contact')->withErrors($validator)->withInput();
		}
		}
		else{
			return Redirect::to('/');
		}
	}

}
