<?php

class AuthController extends \BaseController {
	protected $layout = 'layouts.layout';

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		if (Auth::check()) {
			return Redirect::to('dashboard');
		}
		return View::make('page.ingreso');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function logOut()
	{
		//
		Auth::logout();
        return Redirect::to('/');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 
		$data=['email'=>Input::get('emailLogin'),
			   'password'=>Input::get('passwordLogin')];
		
		$empresa = new Empresa;

		if(Auth::attempt($data)){

			$id = Auth::user()->descripcion;
			return Redirect::to('dashboard/'.$id);
			$this->layout->empresa = $id;

		}else{
			echo "vayase a la ptm";
		}
		
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
		//
	}


}
