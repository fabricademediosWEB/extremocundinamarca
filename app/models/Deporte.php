<?php 
	class Deporte extends Eloquent{
		
		protected $table = 'Deportes';

		public function empresas()
		{
			return $this->belognsToMany('Empresa');
		}
	}
?>