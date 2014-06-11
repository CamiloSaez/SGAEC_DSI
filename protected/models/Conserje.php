<?php

/**
 * This is the model class for table "CONSERJE".
 *
 * The followings are the available columns in table 'CONSERJE':
 * @property string $CON_RUT
 * @property integer $COM_CORREL
 * @property string $CON_CLAVE
 * @property string $CON_NOMBRE
 * @property string $CON_APELLIDOS
 * @property string $CON_TELEFONO
 * @property string $CON_CORREO
 *
 * The followings are the available model relations:
 * @property COMUNIDAD $cOMCORREL
 * @property FALTA[] $fALTAs
 * @property VISITAS[] $vISITASes
 */
class Conserje extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'CONSERJE';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
			return array(
		
			//Requeridos
			array('CON_RUT, COM_CORREL, CON_CLAVE ,CON_NOMBRE, CON_APELLIDOS', 'required'),
			
			//Largo texto maximo y minimo
			array('CON_NOMBRE, CON_APELLIDOS', 'length', 'max'=>100, 'min'=>3),
			array('CON_CLAVE', 'length', 'max'=>1024),
			array('CON_CORREO', 'length', 'max'=>150),
			array('CON_TELEFONO', 'length', 'max'=>10, 'min'=>10),
			array('CON_CORREO', 'length', 'max'=>150),
			//Enteros positivos y Números naturales
			array('CON_TELEFONO', 'numerical','min'=>0,'integerOnly'=>true),
						
			array('CON_RUT','validateRut'),
			array('CON_NOMBRE','validateUsername'),
			array('CON_APELLIDOS','validateApel'),
			array('CON_CORREO','email'),
			//array('CON_APELLIDOS','validateUsername'),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('CON_RUT, COM_CORREL, CON_CLAVE, CON_NOMBRE, CON_APELLIDOS, CON_TELEFONO, CON_CORREO', 'safe', 'on'=>'search'),
		);
	}
	
	/** 
	 * @param string HOG_RUT
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/  
 
			public function validateRut($atribute, $params) {
			
      			$rut=$this->CON_RUT;
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
				$this->addError('CON_RUT', 'Rut inv&aacute;lido.');
    			}
		
		
	/** 
	 * @param string CON_NOMBRE
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateUsername($nombre,$validate)
		{
		$nom=$this->CON_NOMBRE;
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
         	$this->addError('CON_NOMBRE', 'Nombre inv&aacute;lido.');
			}
   		} 
		
	/** 
	 * @param string CON_CON_APELLIDOS
 	* @param array Opciones adicionales especificadas en la regla de validación. 
 	*/ 		
		function validateApel($apellido,$validate)
		{
		$apel=$this->CON_APELLIDOS;
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
         	$this->addError('CON_APELLIDOS', 'Apellidos inv&aacute;lidos.');
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
			'fALTAs' => array(self::HAS_MANY, 'FALTA', 'CON_RUT'),
			'vISITASes' => array(self::HAS_MANY, 'VISITAS', 'CON_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CON_RUT' => 'Rut del Conserje',
			'COM_CORREL' => 'Comunidad',
			'CON_CLAVE' => 'Clave del Conserje',
			'CON_NOMBRE' => 'Nombre del Conserje',
			'CON_APELLIDOS' => 'Apellidos del Conserje',
			'CON_TELEFONO' => 'Telefono del Conserje',
			'CON_CORREO' => 'Correo del Conserje',
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
		$com=yii::app()->user->comunidad;
		
		$criteria=new CDbCriteria;        
		$criteria->compare('CON_RUT',$this->CON_RUT,true);
		$criteria->compare('COM_CORREL',$com);
		$criteria->compare('CON_CLAVE',$this->CON_CLAVE,true);
		$criteria->compare('CON_NOMBRE',$this->CON_NOMBRE,true);
		$criteria->compare('CON_APELLIDOS',$this->CON_APELLIDOS,true);
		$criteria->compare('CON_TELEFONO',$this->CON_TELEFONO,true);
		$criteria->compare('CON_CORREO',$this->CON_CORREO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Conserje the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
