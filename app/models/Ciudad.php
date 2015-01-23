<?php 
	class Ciudad extends Eloquent{
		
		protected $table = 'Ciudades';

		public function direcciones()
		{
			return $this->hasMany('Direccion');
		}

		public function departamento()
		{
			return $this->belongsTo('Departamento');
		}

		public function empresatransportes()
		{
			return $this->belongsToMany('EmpresasTransportes');
		}
	}
?>