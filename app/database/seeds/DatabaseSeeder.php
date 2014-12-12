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
		DB::table('Departamento')->insert(array('descripcion' => 'Cundinamarca'));

		$this->command->info('Departamento ingresado');

		//Municipios Cundinamarca
		DB::table('Ciudad')->insert(array('descripcion' => 'Agua de Dios', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Alban', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Anapoima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Anolaima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Apulo', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Arbelaez', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Beltran', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Bituima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Bojaca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cabrera', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cachipay', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cajica', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Caparrapi', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Caqueza', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Carmen de Capura', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Chaguani', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Chia', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Chipaque', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Choachi', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Choconta', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cogua', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cota', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Cucunuba', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'El Colegio', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'El Peñon', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'El Rosal', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Facatativá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Fómeque', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Fosca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Funza', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Fúquene', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Fusagasugá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Gachalá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Gachancipá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Gachetá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Gama', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Girardot', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Granada', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guachetá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guaduas', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guasca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guataquí', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guatavita', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guayabal de Síquima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Guayabetal', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Gutiérrez', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Jerusalén', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Junín', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'La Calera', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'La Mesa', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'La Palma', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'La Peña', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'La Vega', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Lenguazaque', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Machetá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Madrid', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Manta', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Medina', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Mosquera', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Nariño', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Nemocón', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Nilo', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Nimaima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Nocaima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Pacho', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Paime', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Pandi', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Paratebueno', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Pasca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Puerto Salgar', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Pulí', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Quebradanegra', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Quetame', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Quipile', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Ricaurte', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'San Antonio de Tequendama', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'San Bernardo', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'San Cayetano', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'San Francisco', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'San Juan de Río Seco', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Sasaima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Sesquilé', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Sibaté', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Silvania', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Simijaca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Soacha', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Sopó', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Subachoque', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Suesca', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Supatá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Susa', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Sutatausa', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tabio', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tausa', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tena', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tenjo', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tibacuy', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tibirita', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tocaima', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Tocancipá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Topaipí', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Ubalá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Ubaque', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Ubaté', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Une', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Útica', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Venecia', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Vergara', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Vianí', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Villagómez', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Villapinzón', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Villeta', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Viotá', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Yacopí', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Zipacón', 'departamento_id' => 1));
		DB::table('Ciudad')->insert(array('descripcion' => 'Zipaquirá', 'departamento_id' => 1));

		//Dtos deportes extremos
		DB::table('Deporte')->insert(array('descripcion' => 'Torrentismo'));
		DB::table('Deporte')->insert(array('descripcion' => 'Bungee Jumping'));
		DB::table('Deporte')->insert(array('descripcion' => 'Escalda'));
		DB::table('Deporte')->insert(array('descripcion' => 'Buceo'));
		DB::table('Deporte')->insert(array('descripcion' => 'Paint Ball'));
		DB::table('Deporte')->insert(array('descripcion' => 'Kayak'));
		DB::table('Deporte')->insert(array('descripcion' => 'Parapente'));
		DB::table('Deporte')->insert(array('descripcion' => 'Rappel'));
		DB::table('Deporte')->insert(array('descripcion' => 'Canyoning'));
		DB::table('Deporte')->insert(array('descripcion' => 'Rafting'));
		DB::table('Deporte')->insert(array('descripcion' => 'Espeleologia'));
		DB::table('Deporte')->insert(array('descripcion' => 'Karts'));
		DB::table('Deporte')->insert(array('descripcion' => 'Ciclomontañismo'));
		DB::table('Deporte')->insert(array('descripcion' => 'Sandboarding'));
		DB::table('Deporte')->insert(array('descripcion' => 'Canopy'));
		DB::table('Deporte')->insert(array('descripcion' => 'Montañismo'));
		DB::table('Deporte')->insert(array('descripcion' => 'Puenting'));
		DB::table('Deporte')->insert(array('descripcion' => 'Trekking'));
			

	}

}
