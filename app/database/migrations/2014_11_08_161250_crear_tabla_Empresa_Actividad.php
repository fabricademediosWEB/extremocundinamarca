<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpresaActividad extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Empresa_Actividad', function(Blueprint $table)
		{
			//
			$table->integer('precio');

			$table->unsignedInteger('empresa_id');
			$table->foreign('empresa_id')->references('id')->on('Empresa');

			$table->unsignedInteger('actividad_id');
			$table->foreign('actividad_id')->references('id')->on('Actividad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Empresa_Actividad');
	}

}
