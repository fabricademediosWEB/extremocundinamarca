<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaCiudadEmpresasTransporte extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Ciudad_EmpresasTransporte', function(Blueprint $table)
		{
			//
			$table->integer('precio', 10);
			//referencias a otras tablas

			$table->integer('ciudad_origen_id')->unsigned();
			$table->foreign('ciudad_origen_id')->references('id')->on('Ciudades');


			$table->integer('ciudad_destino_id')->unsigned();
			$table->foreign('ciudad_destino_id')->references('id')->on('Ciudades');

			$table->integer('empresa_transporte_id')->unsigned();
			$table->foreign('empresa_transporte_id')->references('id')->on('EmpresasTransportes');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Ciudad_EmpresasTransporte');
	}

}
