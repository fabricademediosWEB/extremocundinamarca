<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaDirecciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Direcciones', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('descripcion',45);
			//referencias a otras tablas
			$table->integer('id_ciudad')->unsigned();
			$table->foreign('id_ciudad')->references('id')->on('Ciudades');

			$table->integer('empresa_id')->unsigned();
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
		Schema::drop('Direcciones');
	}

}
