<?php
	class PostController extends BaseController {
		//add post
		public function addPost(){
			$categories = Category::orderBy('id','asc')->lists('name','id');
			return View::make('admin.posts.add',array('categories'=>$categories));
			// return "No";
		}

		public function createPost(){
			$rule = array(
				'title'=>'required',
				'description'=>'required',
				'content'=>'required',
				'slider'=>'image',
				'avatar'=>'image'
			);
			$validator = Validator::make(Input::all(),$rule);
			if($validator->passes()){
				$post = new Post;
				$post->title = Input::get('title');
				$post->content = Input::get('content');
				$post->description = Input::get('description');
				$post->category_id = Input::get('category_id');
				// $post->user_id = Auth::user()->id;
				$post->user_id = 1;
				if($post->save()){
					if(Input::hasFile('avatar')){
						$avatar = Input::file('avatar');
						$mime = $avatar->getClientOriginalExtension();
						$rename = rand(1111,9999).'.'.$mime;
					    $filename = $avatar->move('uploads/post/'.$post->id.'/', $rename);
					    $filename = 'uploads/post/'.$post->id.'/'. $rename;
					    $post->thumbnail = $filename;
					}
					if(Input::hasFile('slider')){
						$slider = Input::file('slider');
						$mime = $slider->getClientOriginalExtension();
						$rename = rand(1111,9999).'.'.$mime;
					    $filename = $slider->move('uploads/post/'.$post->id.'/', $rename);
					    $filename = 'uploads/post/'.$post->id.'/'. $rename;
					    $post->slider = $filename;
					}
					$post->save();
				}
				return Redirect::to('admin/post/list')->with('success', 'Create successed!');
			
			}
			else{
				return Redirect::to('admin/post/add')->withErrors($validator)->withInput();
			}
		}

		//show post
		public function showPost($id){
			$posts = Post::where('category_id',$id)->orderBy('id','desc')->paginate(20);
			return View::make('admin.posts.list',array('posts'=>$posts));
		}

		//edit post
		public function editPost($id){
			$post = Post::find($id);
			$categories = Category::orderBy('id','asc')->lists('name','id');
			return View::make('admin.posts.edit',array('post'=>$post,'categories'=>$categories));
		}

		public function updatePost(){
			$id = Input::get('id');
			$rule = array(
				'title'=>'required',
				'description'=>'required',
				'content'=>'required',
				'slider'=>'image',
				'avatar'=>'image'
			);
			$validator = Validator::make(Input::all(),$rule);
			if($validator->passes()){
				$post = Post::find($id);
				$post->title = Input::get('title');
				$post->content = Input::get('content');
				$post->description = Input::get('description');
				$post->category_id = Input::get('category_id');
				// $post->user_id = Auth::user()->id;
				$post->user_id = 1;
				if($post->save()){
					if(Input::hasFile('avatar')){
						if(File::exists($post->thumbnail))
							File::delete($post->thumbnail);
						$avatar = Input::file('avatar');
						$mime = $avatar->getClientOriginalExtension();
						$rename = rand(1111,9999).'.'.$mime;
					    $filename = $avatar->move('uploads/post/'.$post->id.'/', $rename);
					    $filename = 'uploads/post/'.$post->id.'/'. $rename;
					    $post->thumbnail = $filename;
					}
					if(Input::hasFile('slider')){
						if(File::exists($post->slider))
							File::delete($post->slider);
						$slider = Input::file('slider');
						$mime = $slider->getClientOriginalExtension();
						$rename = rand(1111,9999).'.'.$mime;
					    $filename = $slider->move('uploads/post/'.$post->id.'/', $rename);
					    $filename = 'uploads/post/'.$post->id.'/'. $rename;
					    $post->slider = $filename;
					}
					$post->save();
				}
				return Redirect::to('admin/post/list/'.$post->category_id)->with('success', 'Update successed!');
			
			}
			else{
				return Redirect::to('admin/post/edit/'.$id)->withErrors($validator)->withInput();
			}
		}

		//delete post
		public function deletePost($id){
			$post = Post::find($id);
			$post->delete();
			return Redirect::to('admin/post/list/'.$post->category_id)->with('success', 'Delete successed!');
		}
	}