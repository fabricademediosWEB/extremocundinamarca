<?php 
	class Direccion extends Eloquent{
		
		protected $table = 'Direcciones';

		public function empresa()
		{
			return $this->belongsTo('Empresa');
		}

		public function ciudad()
		{
			return $this->belongsTo('Cuidad');
		}

		public function telefono()
		{
			return $this->hasMany('Telefono');
		}
	}
?>