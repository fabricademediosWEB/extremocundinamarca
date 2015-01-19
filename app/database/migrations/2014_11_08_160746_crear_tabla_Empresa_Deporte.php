<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaEmpresaDeporte extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Deporte_Empresa', function(Blueprint $table)
		{
			//
			$table->integer('precio_fin_semana');
			$table->integer('precio_dia_habil');

			$table->unsignedInteger('empresa_id');
			$table->foreign('empresa_id')->references('id')->on('Empresas');

			$table->unsignedInteger('deporte_id');
			$table->foreign('deporte_id')->references('id')->on('Deportes');
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
		Schema::drop('Deporte_Empresa');
	}

}
