<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDireccionEmpresa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Direccion_Empresa', function(Blueprint $table)
		{
			//
			$table->unsignedInteger('direccion_id');
			$table->foreign('direccion_id')->references('id')->on('Direccion');

			$table->unsignedInteger('empresa_id');
			$table->foreign('empresa_id')->references('id')->on('Empresa');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Direccion_Empresa');
	}

}
