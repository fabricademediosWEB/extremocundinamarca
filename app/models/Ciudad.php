<?php 
	class Ciudad extends Eloquent{
		
		protected $table = 'Ciudades';

		public function direccion()
		{
			return $this->hasMany('Direccion');
		}

		public function departamento()
		{
			return $this->belongsTo('Departamento');
		}

		public function empresatransporte()
		{
			return $this->belongsToMany('EmpresasTransportes');
		}
	}
?>