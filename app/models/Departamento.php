<?php 
	class Departamento extends Eloquent{
		
		protected $table = 'Departamentos';

		public function ciudades()
		{
			return $this->hasMany('Ciudad');
		}
	}
?>