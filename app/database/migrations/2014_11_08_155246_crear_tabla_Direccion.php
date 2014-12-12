<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaDireccion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Direccion', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion',100);
			$table->string('email',45);

			$table->unsignedInteger('ciudad_id');
			$table->foreign('ciudad_id')->references('id')->on('Ciudad');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Direccion');
	}

}