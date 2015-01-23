<?php 
	class Empresa extends Eloquent{
		
		protected $table = 'Empresas';

		public function actividades()
		{
			return $this->belongsToMany('Actividad');
		}

		public function deportes()
		{
			return $this->belognsToMany('Deporte');
		}

		public function direcciones()
		{
			return $this->hasMany('Direccion');
		}
			
		public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = Hash::make($value);		
		}
	}
?>