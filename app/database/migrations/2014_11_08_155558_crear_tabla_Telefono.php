<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaTelefono extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Telefono', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('numero_telefono',45);

			$table->unsignedInteger('direccion_id');
			$table->foreign('direccion_id')->references('id')->on('Direccion');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Telefono');
	}

}
