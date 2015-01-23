<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaTelefonos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Telefonos', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('telefono',10);

			$table->integer('direccion_id')->unsigned();
			$table->foreign('direccion_id')->references('id')->on('Direcciones');
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
		Schema::drop('Telefonos');
	}

}
