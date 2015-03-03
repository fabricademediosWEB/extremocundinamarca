<?php 
class DepartamentoTableSeeder extends Seeder{

	public function run()
	{
		DB::table('Departamentos')->insert(array('descripcion' => 'Cundinamarca'));
		$this->command->info('Departamento ingresado');
	}
}
 ?>