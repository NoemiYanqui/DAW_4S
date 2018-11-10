<?php namespace GestorImagenes\Http\Controllers;

class FotoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return 'Mostrando fotos del usuario';
	}
	public function getCrearFoto(){
		return 'formulario de crear fotos';
	}
	public function postCrearFoto(){
		return 'almacenando foto';
	}
	public function getActualizarFoto(){
		return 'formulario de actualizar foto';
	}
	public function postActualizarFoto(){
		return ' actualizar foto';
	}
	public function getEliminarFoto(){
		return 'formulario de eliminar foto';
	}

	public function postEliminarFoto(){
		return 'Eliminando foto';
	}
	public function missingMethod($parameters=array()){
		abort(404);
	}
}

