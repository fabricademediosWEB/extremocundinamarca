<?php 
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

	class Empresa extends Eloquent implements UserInterface, RemindableInterface{
		
		protected $table = 'Empresas';
		public $errors;

		public function actividades()
		{
			return $this->belongsToMany('Actividad');
		}

		public function deportes()
		{
			return $this->belognsToMany('Deporte');
		}

		public function direccion()
		{
			return $this->hasMany('Direccion');
		}
			
		public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = Hash::make($value);		
		}

		public function validate($data)
		{
			$rules=array('nameCompany' => 'required',
					'NIT' => 'required|digits:10,unique:empresas,nit',
					'password' => 'required|min:6|alpha_num',
					'passwordConfirm' => 'required|min:6|alpha_num',
					'email' => 'required|email');

			$validator = Validator::make($data, $rules);

			if($validator->passes()){
				return true;
			}else{
				$this->errors = $validator->errors();
				return false;
			}
		}

		public function confirmPass($Pass1, $Pass2)
		{
			if($Pass1 == $Pass2){
				return true;
			}else{
				return false;
			}
		}
		public function showErrors()
		{
			return $this->errors;
		}
		/**
		 * Get the unique identifier for the user.
		 *
		 * @return mixed
		 */
		public function getAuthIdentifier()
		{
		    return $this->getKey();
		}

		/**
		 * Get the password for the user.
		 *
		 * @return string
		 */
		public function getAuthPassword()
		{
		    return $this->password;
		}

		/**
		 * Get the e-mail address where password reminders are sent.
		 *
		 * @return string
		 */
		public function getReminderEmail()
		{
		    return $this->email;
		}

		public function getRememberToken()
		{
		    return $this->remember_token;
		}

		public function setRememberToken($value)
		{
		    $this->remember_token = $value;
		}

		public function getRememberTokenName()
		{
		    return 'remember_token';
		}
	}
?>