<?php

class EmpresaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		return View::make('page.registro');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//Validation Rules
		$rules = array(
		'nameCompany' => 'required',
		'NIT' => 'required|digits:10',
		'password' => 'required|min:6|alpha_num',
		'direction' => 'required',
		'email' => 'required|email',
		'telefono_fijo' => 'required|between:7,10'
		);

		$pass1 = Input::get('password');
		$passC = Input::get('passwordConfirm');

		$empresa = new Empresa;
		$direccion = new Direccion;
		$telefono = new Telefono;

		$empresa->descripcion = Input::get('nameCompany');
		$empresa->nit = Input::get('nit');
		if($pass1 == $passC){
			$empresa->password = Input::get('password');
		}else{
			echo 'las contraseñas no coinciden, por favor reingreselas';
		}
		$empresa->password = Input::get('password');
		
		$empresa->save();


		$direccion->descripcion = Input::get('direction');
		$direccion->email = Input::get('email');
		$direccion->ciudad_id = Input::get('cities');
		$direccion->save();

		$telefono->telefono = Input::get('telephone');
		$telefono=$direccion->telefono()->save($telefono);
		$telefono->save();
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$empresa = Empresa::find($id);

		if(is_null($empresa)){
			return 'eliminado';
		}
		$empresa->delete();
		return Redirect::to('prueba');
	}

}
