<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected $layoutAdmin = 'admin.layout';
	protected $layout = 'front.layout';

	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$this->layout = View::make($this->layout);
		}
		elseif(! is_null($this->layoutAdmin)){
			$this->layoutAdmin = View::make($this->layoutAdmin);
		}
	}

}
