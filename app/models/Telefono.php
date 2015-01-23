<?php 
	class Telefono extends Eloquent{
		
		protected $table = 'Telefonos';

		public function direccion()
		{
			return $this->belongsTo('Direccion','id_direccion');
		}
	}
?>