<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCiudades extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ciudades', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('descripcion',100);
			//Referencia a otras tablas
			$table->integer('departamento_id')->unsigned();
			$table->foreign('departamento_id')->references('id')->on('Departamentos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Ciudades');
	}

}
