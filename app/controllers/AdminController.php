<?php

class AdminController extends BaseController {

	protected function home() {
		$data = array('title' => 'Bienvenido', 'sub' => '');
		return View::make('admin.index')->with($data);
	}

}