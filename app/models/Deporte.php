<?php 
	class Deporte extends Eloquent{
		
		protected $table = 'Deportes';

		public function empresas()
		{
			return $this->belognsToMany('Empresa');
		}

		public function comboDeporte()
		{
			# code...
			return DB::table('Deportes')->orderBy('descripcion')->lists('descripcion','id');
		}
	}
?>