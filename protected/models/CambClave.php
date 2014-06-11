<?php

class CambClave extends CFormModel
{
	public $nueva_contraseña;
	public $clave_actual;	

	private $_identity;
	public $_nuevo;

	public function rules()
	{  		
		return array(
			// nueva_contraseña and clave_actual are required
			array('nueva_contraseña, clave_actual', 'required'),			
			// clave_actual needs to be authenticated
			array('clave_actual', 'authenticate'),
		);
	}

	public function authenticate($attribute,$params)
	{
		if(!$this->hasErrors())
		{
			$this->_identity = new UserIdentity ( yii::app()->user->id,$this->clave_actual );
			if(!$this->_identity->authenticate())
				$this->addError('clave_actual','Contraseña actual es incorrecta.');
		}
	}
	

	public function cambiar($_nuevo)
	{  

		if($this->_identity===null)
		{
			$this->_identity = new UserIdentity (yii::app()->user->id,$this->clave_actual);
			$this->_identity->authenticate();
		}
		if($this->_identity->errorCode===UserIdentity::ERROR_NONE)
		{		
       
			if( Administrador::model()->findByPk(yii::app()->user->id)!==null){
				$md=  Administrador::model()->findByPk(yii::app()->user->id);				
				$md->ADM_CLAVE = $_nuevo;//md5($_nuevo);					
				$md->save();
				return true;  
				 }	

			if(Conserje::model()->findByPk(yii::app()->user->id)!==null){ 
				$md=  Conserje::model()->findByPk(yii::app()->user->id);				
				$md->CON_CLAVE = $_nuevo;					
				$md->save();
				return true; 
				 }
				 				 	
			if(Hogar::model()->findByPk(yii::app()->user->id)!==null){
				$md=  Hogar::model()->findByPk(yii::app()->user->id);				
				$md->HOG_CLAVE = $_nuevo;					
				$md->save();
				return true; 
				 }			
		}

		else return false;
	}
}
