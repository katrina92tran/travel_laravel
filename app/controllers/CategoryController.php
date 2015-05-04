<?php

	class CategoryController extends BaseController {
		//add category
		public function addCategory(){
			return View::make('admin.categories.add');
		}

		public function createCategory(){
			$validator = Validator::make(Input::all(),array('name'=>'required'));
			if($validator->passes()){
				$category = new Category;
				$category->name = Input::get('name');
				$category->save();
				return Redirect::to('admin/category/list')->with('success', 'Create successed!');
			
			}
			else{
				return Redirect::to('admin/category/add')->withErrors($validator)->withInput();
			}
		}
		//show list category
		public function showCategory(){
			$categories = Category::orderBy('id','desc')->paginate(20);
			return View::make('admin.categories.list',array('categories'=>$categories));
		}
		//edit category
		public function editCategory($id){
			$category = Category::find($id);
			return View::make('admin.categories.edit',array('category'=>$category));
		}
		public function updateCategory(){
			$id = Input::get('id');
			$validator = Validator::make(Input::all(),array('name'=>'required'));
			if($validator->passes()){
				$category = Category::find($id);
				$category->name = Input::get('name');
				$category->save();
				return Redirect::to('admin/category/list')->with('success', 'Update successed!');
			
			}
			else{
				return Redirect::to('admin/category/add')->withErrors($validator)->withInput();
			}
		}
		//show menu left
		public function showLeftCategory(){
			$categoriess = Category::orderBy('name','desc');
			return View::make('admin.component.left_category',array('categoriess'=>$categoriess));
		}
	}