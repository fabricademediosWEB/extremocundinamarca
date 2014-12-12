<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaRutas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Rutas', function(Blueprint $table)
		{
			$table->integer('precio', 10);
			//referencias a otras tablas

			$table->unsignedInteger('ciudad_origen_id');
			$table->foreign('ciudad_origen_id')->references('id')->on('Ciudad');


			$table->unsignedInteger('ciudad_destino_id');
			$table->foreign('ciudad_destino_id')->references('id')->on('Ciudad');

			$table->unsignedInteger('empresa_transporte_id');
			$table->foreign('empresa_transporte_id')->references('id')->on('Empresa_Transporte');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Rutas');
	}

}
