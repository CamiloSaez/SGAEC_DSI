<?php

/**
 * This is the model class for table "HOGAR".
 *
 * The followings are the available columns in table 'HOGAR':
 * @property string $HOG_RUT
 * @property integer $COM_CORREL
 * @property string $HOG_CLAVE
 * @property integer $HOG_N_HOGAR
 * @property integer $HOG_MCUADRADOS
 * @property string $HOG_NOMBRE
 * @property string $HOG_APELLIDOS
 * @property string $HOG_TELEFONO
 * @property string $HOG_CORREO
 * @property string $HOG_N_USUARIO
 *
 * The followings are the available model relations:
 * @property ESPACIOCOMUN[] $eSPACIOCOMUNs
 * @property AVISOCLASIFICADO[] $aVISOCLASIFICADOs
 * @property FALTA[] $fALTAs
 * @property GASTOCOMUN[] $gASTOCOMUNs
 * @property COMUNIDAD $cOMCORREL
 * @property RECLAMOS[] $rECLAMOSes
 * @property ENCUESTA[] $eNCUESTAs
 * @property VISITAS[] $vISITASes
 */
class Hogar extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'HOGAR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOG_RUT, COM_CORREL, HOG_N_USUARIO, HOG_N_HOGAR,HOG_MCUADRADOS', 'required'),
			array('HOG_N_HOGAR, HOG_MCUADRADOS', 'numerical', 'integerOnly'=>true),
			array('HOG_N_HOGAR', 'numerical', 'min'=>1, 'max'=>9999),
			array('HOG_MCUADRADOS', 'numerical', 'min'=>18, 'max'=>250),
			array('HOG_RUT', 'length','min'=>12,'max'=>12),
			array('HOG_CLAVE', 'length', 'max'=>1024),
			array('HOG_NOMBRE, HOG_APELLIDOS, HOG_N_USUARIO', 'length', 'max'=>100),
			array('HOG_TELEFONO', 'length','min'=>10,'max'=>10),
			array('HOG_CORREO', 'length', 'max'=>150),
			array('HOG_CORREO','email'),
			array('HOG_RUT','validateRut'),
			array('HOG_N_USUARIO','unique'),
			array('HOG_NOMBRE', 'validateUsername'),
			array('HOG_APELLIDOS', 'validateApel'),
			array('HOG_TELEFONO', 'numerical'),
			array('HOG_MCUADRADOS', 'validarNumeroMetros'),
			array('HOG_N_HOGAR', 'validarNumeroHogares'),
			array('HOG_TELEFONO', 'validarTelefono'),

			//array('HOG_RUT','formatearRut'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('HOG_RUT, COM_CORREL, HOG_CLAVE, HOG_N_HOGAR, HOG_MCUADRADOS, HOG_NOMBRE, HOG_APELLIDOS, HOG_TELEFONO, HOG_CORREO, HOG_N_USUARIO', 'safe', 'on'=>'search'),
		);
	}


//Funcion para validar que sea número (natural) 
	 public function validarNumeroMetros($atribute, $params) {
				$n1=$this->HOG_MCUADRADOS;
				$patron="/^[0-9]+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('HOG_MCUADRADOS', 'El número de metros cuadrados debe ser un número');
					}	
    			}

    //Funcion para validar que sea número (natural) 
	 public function validarNumeroHogares($atribute, $params) {
				$n1=$this->HOG_N_HOGAR;
				$patron="/^[0-9]+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('HOG_N_HOGAR', 'El número de un Hogar debe ser un número');
					}	
    			}			
	 public function validarTelefono($atribute, $params) {
				$n1=$this->HOG_TELEFONO;
				$patron="/^([0-9]|[[:space:]])*+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('HOG_TELEFONO', 'El teléfono debe ser un número y debe seguir el formato de un n° fijo (ej. 412550000)');
					}
    			}				
	//Funcion para validar que sea número o letra 
	 public function validarNumeroLetra($atribute, $params) {
				$nombre=$this->COM_NOMBRE;
				$patron="/^([a-zA-Z0-9]|[[:space:]])+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $nombre)){
					$this->addError('COM_NOMBRE', 'Nombre no válido');
					}
    			}
	/** 
 * @param string HOG_RUT
 * @param array Opciones adicionales especificadas en la regla de validación. 
 */  
			public function validateRut($atribute, $params) {
      			$rut=$this->HOG_RUT;
				$r = preg_replace('/(\.)|[ ]|[\,]|[\']/','',$rut);
				$data = explode('-', $r);
				$evaluate = strrev($data[0]);
				$multiply = 2;
				$store = 0;
				for ($i = 0; $i < strlen($evaluate); $i++) {
				$store += $evaluate[$i] * $multiply;
				$multiply++;
				if ($multiply > 7)
				$multiply = 2;
				}
				isset($data[1]) ? $verifyCode = strtolower($data[1]) : $verifyCode = '';
				$result = 11 - ($store % 11);
				if ($result == 10)
				$result = 'k';
				if ($result == 11)
				$result = 0;
				if ($verifyCode != $result)
				$this->addError('HOG_RUT', 'Rut inv&aacute;lido.');
    			}
	
   /** 
 * @param string HOG_RUT
 * @param array Opciones adicionales especificadas en la regla de validación. 
 */  

	/*public function formatearRut(){
				$unformattedRut = $this->HOG_RUT;
        if (strpos($unformattedRut, '-') !== false ) {
            $splittedRut = explode('-', $unformattedRut);
            $number = number_format($splittedRut[0], 0, ',', '.');
            $verifier = strtoupper($splittedRut[1]);
            return $number . '-' . $verifier;
        }
        return number_format($unformattedRut, 0, ',', '.');
	}
	*/
	/** 
	* @param string HOG_NOMBRE
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateUsername($nombre,$validate)
		{
		$nom=$this->HOG_NOMBRE;
		$nom=strtolower($nom);
		$cont=0;
		
		$permitidos = "abcdefghijklmnopqrstuvwxyz ";
   				
			for ($i=0; $i<strlen($nom); $i++){
      	
				if (strpos($permitidos, substr($nom,$i,1))===false){
         			$cont++;
      			}	
			}
			
			if($cont>0){
			//no es válido;
         	$this->addError('HOG_NOMBRE', 'Nombre inv&aacute;lido.');
			}
   		} 
		
	/** 
	 * @param string HOG_APELLIDOS
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateApel($apellido,$validate)
		{
		$apel=$this->HOG_APELLIDOS;
		$apel=strtolower($apel);
		$cont=0;
		
		$permitidos = "abcdefghijklmnopqrstuvwxyz ";
   				
			for ($i=0; $i<strlen($apel); $i++){
      	
				if (strpos($permitidos, substr($apel,$i,1))===false){
         			$cont++;
      			}	
			}
			
			if($cont>0){
			//no es válido;
         	$this->addError('HOG_APELLIDOS', 'Apellidos inv&aacute;lidos.');
			}
   		} 

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'eSPACIOCOMUNs' => array(self::MANY_MANY, 'ESPACIOCOMUN', 'ARRIENDA(HOG_N_USUARIO, ESP_CORREL)'),
			'aVISOCLASIFICADOs' => array(self::HAS_MANY, 'AVISOCLASIFICADO', 'HOG_N_USUARIO'),
			'fALTAs' => array(self::HAS_MANY, 'FALTA', 'HOG_N_USUARIO'),
			'gASTOCOMUNs' => array(self::HAS_MANY, 'GASTOCOMUN', 'HOG_N_USUARIO'),
			'cOMCORREL' => array(self::BELONGS_TO, 'COMUNIDAD', 'COM_CORREL'),
			'rECLAMOSes' => array(self::HAS_MANY, 'RECLAMOS', 'HOG_N_USUARIO'),
			'eNCUESTAs' => array(self::MANY_MANY, 'ENCUESTA', 'RESPONDE(HOG_N_USUARIO, ENC_CORREL)'),
			'vISITASes' => array(self::HAS_MANY, 'VISITAS', 'HOG_N_USUARIO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'HOG_RUT' => 'Rut del Propietario',
			'COM_CORREL' => 'Comunidad',
			'HOG_CLAVE' => 'Clave',
			'HOG_N_HOGAR' => 'N° del Hogar',
			'HOG_MCUADRADOS' => 'Metros cuadrados',
			'HOG_NOMBRE' => 'Nombre del Propietario',
			'HOG_APELLIDOS' => 'Apellidos del Propietario',
			'HOG_TELEFONO' => 'Teléfono',
			'HOG_CORREO' => 'Correo electrónico',
			'HOG_N_USUARIO' => 'Login de usuario',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('HOG_RUT',$this->HOG_RUT,true);
		$criteria->compare('COM_CORREL',$this->COM_CORREL);
		$criteria->compare('HOG_CLAVE',$this->HOG_CLAVE,true);
		$criteria->compare('HOG_N_HOGAR',$this->HOG_N_HOGAR);
		$criteria->compare('HOG_MCUADRADOS',$this->HOG_MCUADRADOS);
		$criteria->compare('HOG_NOMBRE',$this->HOG_NOMBRE,true);
		$criteria->compare('HOG_APELLIDOS',$this->HOG_APELLIDOS,true);
		$criteria->compare('HOG_TELEFONO',$this->HOG_TELEFONO,true);
		$criteria->compare('HOG_CORREO',$this->HOG_CORREO,true);
		$criteria->compare('HOG_N_USUARIO',$this->HOG_N_USUARIO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Hogar the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
