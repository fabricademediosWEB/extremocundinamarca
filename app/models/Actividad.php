<?php 
	class Actividad extends Eloquent{
		
		protected $table = 'Actividades';

		public function empresa()
		{
			return $this->belognsToMany('Empresa');
		}
	}
?>