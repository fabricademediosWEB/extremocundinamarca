<?php 
	class Deporte extends Eloquent{
		
		protected $table = 'Deportes';

		public function empresa()
		{
			return $this->belognsToMany('Empresa');
		}
	}
?>