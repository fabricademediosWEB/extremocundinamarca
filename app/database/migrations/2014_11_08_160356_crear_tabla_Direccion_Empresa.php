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
		Schema::create('Direcciones_Empresas', function(Blueprint $table)
		{
			//
			$table->unsignedInteger('direccion_id');
			$table->foreign('direccion_id')->references('id')->on('Direcciones');

			$table->unsignedInteger('empresa_id');
			$table->foreign('empresa_id')->references('id')->on('Empresas');
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
		Schema::drop('Direcciones_Empresas');
	}

}
