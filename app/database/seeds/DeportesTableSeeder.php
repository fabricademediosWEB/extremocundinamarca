<?php 
class DeportesTableSeeder extends Seeder{

	public function run()
	{
		# code...
		DB::table('Deportes')->insert(array('descripcion' => 'Torrentismo'));
		DB::table('Deportes')->insert(array('descripcion' => 'Bungee Jumping'));
		DB::table('Deportes')->insert(array('descripcion' => 'Escalda'));
		DB::table('Deportes')->insert(array('descripcion' => 'Buceo'));
		DB::table('Deportes')->insert(array('descripcion' => 'Paint Ball'));
		DB::table('Deportes')->insert(array('descripcion' => 'Kayak'));
		DB::table('Deportes')->insert(array('descripcion' => 'Parapente'));
		DB::table('Deportes')->insert(array('descripcion' => 'Rappel'));
		DB::table('Deportes')->insert(array('descripcion' => 'Canyoning'));
		DB::table('Deportes')->insert(array('descripcion' => 'Rafting'));
		DB::table('Deportes')->insert(array('descripcion' => 'Espeleologia'));
		DB::table('Deportes')->insert(array('descripcion' => 'Karts'));
		DB::table('Deportes')->insert(array('descripcion' => 'Ciclomontañismo'));
		DB::table('Deportes')->insert(array('descripcion' => 'Sandboarding'));
		DB::table('Deportes')->insert(array('descripcion' => 'Canopy'));
		DB::table('Deportes')->insert(array('descripcion' => 'Montañismo'));
		DB::table('Deportes')->insert(array('descripcion' => 'Puenting'));
		DB::table('Deportes')->insert(array('descripcion' => 'Trekking'));

		$this->command->info('Deportes almacenados');
	}
}
 ?>