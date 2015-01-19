<?php 
	class EmpresaTransporte extends Eloquent{
		
		protected $table = 'EmpresasTransportes';

		public function Ciudad()
		{
			return $this->belongsToMany('Ciudades');
		}
	}
?>