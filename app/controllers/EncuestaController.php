<?php

class EncuestaController extends BaseController{
	
	protected function nueva() {
		$data = array('title' => 'Pedrito Fernandez', 'sub' => 'Hola!');
		return View::make('encuesta.nueva')->with($data);
	}	
}