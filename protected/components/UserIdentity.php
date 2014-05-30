<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	private $_rol;	
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */
	public function authenticate()
	{
		
		$admin=Administrador::model()->find("LOWER(ADM_RUT)=?", array(strtolower($this->username)));
		$hogar=Hogar::model()->find("LOWER(HOG_N_USUARIO)=?", array(strtolower($this->username)));
		$cons=Conserje::model()->find("LOWER(CON_RUT)=?", array(strtolower($this->username)));
		$reg= AuthAssignment::model()->find("LOWER(userid)=?", array(strtolower($this->username)));		
		$band=0;
		$pas=null;
		if($admin!==null){ $pas=$admin;	$band = 1; }
		if($cons !==null){ $pas=$cons;	$band = 2; } 
		if($hogar!==null){ $pas=$hogar; $band = 3; }		

		if($pas===null) 
			$this->errorCode=self::ERROR_USERNAME_INVALID;		
		else {
			if($band==1) if($this->password!==$pas->ADM_CLAVE) $this->errorCode=self::ERROR_PASSWORD_INVALID;
				else{
					/*
					if($reg===null) {

						}
					*/	
					//yii::app()->user->USER_ROL;
					//$this->_rol=$admin->USU_ROL;
					$this->setState("nombre",$pas->ADM_NOMBRE);
					$this->setState("comunidad",NULL);
					$this->errorCode=self::ERROR_NONE;
					}
			if($band==2) if($this->password!==$pas->CON_CLAVE) $this->errorCode=self::ERROR_PASSWORD_INVALID;
				else{
					//yii::app()->user->USER_ROL;
					//$this->_rol=$admin->USU_ROL;
					$this->setState("nombre",$pas->CON_NOMBRE);
					$this->errorCode=self::ERROR_NONE;
					}			
			if($band==3) if($this->password!==$pas->HOG_CLAVE) $this->errorCode=self::ERROR_PASSWORD_INVALID;
				else{
					//yii::app()->user->USER_ROL;
					//$this->_rol=$admin->USU_ROL;
					$this->setState("nombre",$pas->HOG_NOMBRE);
					$this->errorCode=self::ERROR_NONE;
					}			
		   }		
		return !$this->errorCode;
	}
}