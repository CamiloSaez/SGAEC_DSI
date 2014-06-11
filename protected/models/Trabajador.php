<?php

/**
 * This is the model class for table "TRABAJADOR".
 *
 * The followings are the available columns in table 'TRABAJADOR':
 * @property string $TRA_RUT
 * @property integer $COM_CORREL
 * @property string $TRA_NOMBRE
 * @property string $TRA_APELLIDOS
 * @property string $TRA_TELEFONO
 * @property string $TRA_FEC_CONTRATO
 * @property string $TRA_CARGO
 * @property integer $TRA_SUELDO
 *
 * The followings are the available model relations:
 * @property COMUNIDAD $cOMCORREL
 */
class Trabajador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TRABAJADOR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TRA_RUT, COM_CORREL', 'required'),
			array('COM_CORREL, TRA_SUELDO', 'numerical', 'integerOnly'=>true),
			array('TRA_RUT', 'length', 'max'=>12),
			array('TRA_NOMBRE, TRA_APELLIDOS, TRA_CARGO', 'length', 'max'=>100),
			array('TRA_TELEFONO', 'length','min'=>10, 'max'=>10),
			array('TRA_SUELDO', 'length', 'min'=>1,'max'=>6),
			array('TRA_FEC_CONTRATO', 'safe'),
			array('TRA_TELEFONO','numerical'),
			array('TRA_SUELDO','numerical','min'=>1,'max'=>999999),
			array('TRA_SUELDO', 'validarSueldo'),
			array('TRA_TELEFONO','validarTelefono'),
			array('TRA_RUT', 'validateRut'),
			array('TRA_NOMBRE','validateUsername'),
			array('TRA_APELLIDOS', 'validateApel'),



			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TRA_RUT, COM_CORREL, TRA_NOMBRE, TRA_APELLIDOS, TRA_TELEFONO, TRA_FEC_CONTRATO, TRA_CARGO, TRA_SUELDO', 'safe', 'on'=>'search'),
		);
	}

	
   /** 
 * @param string TRA_SUELDO
 * @param array Opciones adicionales especificadas en la regla de validación. 
 */
	 public function validarSueldo($atribute, $params) {
				$n1=$this->TRA_SUELDO;
				$patron="/^[0-9]+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('TRA_SUELDO', 'El sueldo debe ser un número');
					}	
    			}	
   
   /** 
 * @param string TRA_TELEFONO
 * @param array Opciones adicionales especificadas en la regla de validación. 
 */	
	 public function validarTelefono($atribute, $params) {
				$n1=$this->TRA_TELEFONO;
				$patron="/^([0-9]|[[:space:]])*+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('TRA_TELEFONO', 'El teléfono debe ser un número y debe seguir el formato de un n° fijo (ej. 412550000)');
					}
    			}	

/** 
 * @param string TRA_RUT
 * @param array Opciones adicionales especificadas en la regla de validación. 
 */  
			public function validateRut($atribute, $params) {
      			$rut=$this->TRA_RUT;
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
				$this->addError('TRA_RUT', 'Rut inv&aacute;lido.');
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
	* @param string TRA_NOMBRE
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateUsername($nombre,$validate)
		{
		$nom=$this->TRA_NOMBRE;
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
         	$this->addError('TRA_NOMBRE', 'Nombre inv&aacute;lido.');
			}
   		} 
		
	/** 
	 * @param string TRA_APELLIDOS
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateApel($apellido,$validate)
		{
		$apel=$this->TRA_APELLIDOS;
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
         	$this->addError('TRA_APELLIDOS', 'Apellidos inv&aacute;lidos.');
			}
   		} 

   		/** 
	 * @param string TRA_CARGO
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateCargo($apellido,$validate)
		{
		$apel=$this->TRA_CARGO;
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
         	$this->addError('TRA_CARGO', 'Cargo inv&aacute;lido.');
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
			'cOMCORREL' => array(self::BELONGS_TO, 'COMUNIDAD', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'TRA_RUT' => 'Rut',
			'COM_CORREL' => 'Comunidad',
			'TRA_NOMBRE' => 'Nombre',
			'TRA_APELLIDOS' => 'Apellidos',
			'TRA_TELEFONO' => 'Telefono',
			'TRA_FEC_CONTRATO' => 'Fecha de Contrato',
			'TRA_CARGO' => 'Cargo',
			'TRA_SUELDO' => 'Sueldo ($)',
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
	$com= yii::app()->user->comunidad;

		$criteria=new CDbCriteria;

		$criteria->compare('TRA_RUT',$this->TRA_RUT,true);
		$criteria->compare('COM_CORREL',$com);
		$criteria->compare('TRA_NOMBRE',$this->TRA_NOMBRE,true);
		$criteria->compare('TRA_APELLIDOS',$this->TRA_APELLIDOS,true);
		$criteria->compare('TRA_TELEFONO',$this->TRA_TELEFONO,true);
		$criteria->compare('TRA_FEC_CONTRATO',$this->TRA_FEC_CONTRATO,true);
		$criteria->compare('TRA_CARGO',$this->TRA_CARGO,true);
		$criteria->compare('TRA_SUELDO',$this->TRA_SUELDO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Trabajador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
