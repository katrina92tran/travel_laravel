<?php

class SliderController extends BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function showSlider()
	{
		$sliders = Slider::orderBy('id','desc');
		return View::make('admin.sliders.list',array('sliders'=>$sliders));
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function addSlider()
	{	
		$validator = Validator::make(Input::all(),array(
			'name' => 'required',
			'pos' => 'required'
		));
		if($validator->passes()){
			$role = new Slider;
			$role->name = Input::get('name');
			$role->pos = Input::get('pos');
			$role->link = Input::get('link');
			$role->save();
			return Redirect::to('admin/slider/list')->with('success', 'Create successed!');
			
		}
		else{
			return Redirect::to('admin/slider/list')->withErrors($validator)->withInput();
		}
	}


	


}
