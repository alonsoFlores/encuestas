<?php

class UsuarioController extends BaseController {

	protected function nuevo() {
		$data = array('title' => 'Bienvenido', 'sub' => '');
		return View::make('admin.usuarios')->with($data);
	}
}