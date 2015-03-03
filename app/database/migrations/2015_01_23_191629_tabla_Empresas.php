<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TablaEmpresas extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Empresas', function(Blueprint $table)
		{
			//
			$table->increments('id');
			$table->string('descripcion',100);
			$table->string('nit',10)->unique();			
			$table->string('email',100);
			$table->string('password',60);
			$table->rememberToken('remember_token',100);
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
		Schema::drop('Empresas');
	}

}
