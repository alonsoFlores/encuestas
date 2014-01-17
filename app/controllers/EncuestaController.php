<?php

class EncuestaController extends BaseController{
	
	protected function nueva() {
		$data = array('title' => 'Juanito Perez', 'sub' => 'Hola!');
		return View::make('encuesta.nueva')->with($data);
	}	
}