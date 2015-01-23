<?php 
	class EmpresaTransporte extends Eloquent{
		
		protected $table = 'EmpresasTransportes';

		public function ciudades()
		{
			return $this->belongsToMany('Ciudad');
		}
	}
?>