<?php 
	class Actividad extends Eloquent{
		
		protected $table = 'Actividades';

		public function empresas()
		{
			return $this->belongsToMany('Empresa');
		}
		public function comboServicios()
		{
			# code...
			return DB::table('Actividades')->orderBy('descripcion')->lists('descripcion','id');
		}
	}
?>