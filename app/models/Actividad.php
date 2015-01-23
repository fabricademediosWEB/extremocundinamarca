<?php 
	class Actividad extends Eloquent{
		
		protected $table = 'Actividades';

		public function empresas()
		{
			return $this->belongsToMany('Empresa');
		}
	}
?>