<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		//ingreso departamento
		DB::table('Departamentos')->insert(array('descripcion' => 'Cundinamarca'));

		$this->command->info('Departamento ingresado');

		//Municipios Cundinamarca
		DB::table('Ciudades')->insert(array('descripcion' => 'Agua de Dios', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Alban', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Anapoima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Anolaima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Apulo', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Arbelaez', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Beltran', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Bituima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Bojaca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cabrera', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cachipay', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cajica', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Caparrapi', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Caqueza', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Carmen de Capura', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Chaguani', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Chia', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Chipaque', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Choachi', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Choconta', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cogua', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cota', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Cucunuba', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'El Colegio', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'El Peñon', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'El Rosal', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Facatativá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Fómeque', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Fosca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Funza', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Fúquene', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Fusagasugá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Gachalá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Gachancipá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Gachetá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Gama', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Girardot', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Granada', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guachetá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guaduas', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guasca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guataquí', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guatavita', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guayabal de Síquima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Guayabetal', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Gutiérrez', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Jerusalén', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Junín', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'La Calera', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'La Mesa', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'La Palma', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'La Peña', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'La Vega', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Lenguazaque', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Machetá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Madrid', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Manta', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Medina', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Mosquera', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Nariño', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Nemocón', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Nilo', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Nimaima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Nocaima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Pacho', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Paime', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Pandi', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Paratebueno', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Pasca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Puerto Salgar', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Pulí', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Quebradanegra', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Quetame', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Quipile', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Ricaurte', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'San Antonio de Tequendama', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'San Bernardo', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'San Cayetano', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'San Francisco', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'San Juan de Río Seco', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Sasaima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Sesquilé', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Sibaté', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Silvania', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Simijaca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Soacha', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Sopó', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Subachoque', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Suesca', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Supatá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Susa', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Sutatausa', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tabio', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tausa', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tena', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tenjo', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tibacuy', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tibirita', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tocaima', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Tocancipá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Topaipí', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Ubalá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Ubaque', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Ubaté', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Une', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Útica', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Venecia', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Vergara', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Vianí', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Villagómez', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Villapinzón', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Villeta', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Viotá', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Yacopí', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Zipacón', 'departamento_id' => 1));
		DB::table('Ciudades')->insert(array('descripcion' => 'Zipaquirá', 'departamento_id' => 1));

		//Dtos deportes extremos
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
			

	}

}
