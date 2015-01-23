<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaActividadEmpresa extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Actividad_Empresa', function(Blueprint $table)
		{
			//
			$table->integer('precio');

			$table->integer('empresa_id')->unsigned();
			$table->foreign('empresa_id')->references('id')->on('Empresas');

			$table->integer('actividad_id')->unsigned();
			$table->foreign('actividad_id')->references('id')->on('Actividades');
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
		Schema::drop('Actividad_Empresa');
	}

}
