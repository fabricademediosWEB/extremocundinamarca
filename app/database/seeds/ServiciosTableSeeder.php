<?php 
/**
* 
*/
class ServiciosTableSeeder extends Seeder
{
	
	function run()
	{
		# code...

		DB::table('Actividades')->insert(array('descripcion' => 'Alojamiento'));
		DB::table('Actividades')->insert(array('descripcion' => 'Piscina'));
		DB::table('Actividades')->insert(array('descripcion' => 'Zona de Camping'));
		DB::table('Actividades')->insert(array('descripcion' => 'Restaurante'));
		DB::table('Actividades')->insert(array('descripcion' => 'Parqueadero'));

		$this->command->info('Servicios almancenados');
	}
}
 ?>