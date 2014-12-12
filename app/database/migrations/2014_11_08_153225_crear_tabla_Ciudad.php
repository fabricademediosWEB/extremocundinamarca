<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaCiudad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ciudad', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',100);
			//Referencia a otras tablas
			$table->unsignedInteger('departamento_id');
			$table->foreign('departamento_id')->references('id')->on('Departamento');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Ciudad');
	}

}
