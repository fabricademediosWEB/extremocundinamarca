<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEmpresaDeporte extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Empresa_Deporte', function(Blueprint $table)
		{
			//
			$table->integer('precio_fin_semana');
			$table->integer('precio_dia_habil');

			$table->integer('empresa_id')->unsigned();
			$table->foreign('empresa_id')->references('id')->on('Empresas');

			$table->integer('deporte_id')->unsigned();
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
		Schema::drop('Empresa_Deporte');
	}

}
