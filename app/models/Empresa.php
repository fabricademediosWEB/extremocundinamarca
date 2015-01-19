<?php 
	class Empresa extends Eloquent{
		
		protected $table = 'Empresas';

		public function actividad()
		{
			return $this->belongsToMany('Actividad');
		}

		public function deporte()
		{
			return $this->belognsToMany('Deporte');
		}

		public function FunctionName()
		{
			return $this->belognsToMany('Direccion');
		}
			
		public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = Hash::make($value);		
		}
	}
?>