<?php

/**
 * This is the model class for table "COMUNIDAD".
 *
 * The followings are the available columns in table 'COMUNIDAD':
 * @property integer $COM_CORREL
 * @property string $ADM_RUT
 * @property string $COM_NOMBRE
 * @property string $COM_DIRECCION
 * @property integer $COM_N_HOGARES
 * @property string $COMU_ID
 * @property string $COM_TELEFONO
 * @property integer $COM_MTS_2
 *
 * The followings are the available model relations:
 * @property ARCHIVO[] $aRCHIVOs
 * @property ADMINISTRADOR $aDMRUT
 * @property ENCUESTA[] $eNCUESTAs
 * @property HOGAR[] $hOGARs
 * @property TRABAJADOR[] $tRABAJADORs
 */
class Comunidad extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'COMUNIDAD';
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
			array('COM_N_HOGARES, COM_NOMBRE', 'required'),
			
			//Largo texto maximo y minimo
			array('COM_NOMBRE', 'length', 'max'=>100),
			array('COM_DIRECCION', 'length', 'max'=>200),
			array('COMU_ID', 'length', 'max'=>50),
			array('COM_TELEFONO', 'length', 'is'=>9),
			//Enteros positivos
			//array('COM_N_HOGARES, COM_MTS_2', 'numerical', 'integerOnly'=>true),
			//Números naturales
			array('COM_N_HOGARES', 'numerical','max'=>200,'min'=>2,  'tooSmall'=>'El número de hogares debe ser superior a 1', 'tooBig'=>'El número de hogares debe ser igual o menor a 200'),
			array('COM_MTS_2', 'numerical','max'=>1000,'min'=>20,  'tooSmall'=>'Los metros cuadrados deben ser superior a 20', 'tooBig'=>'Los metros cuadrados deben ser igual o menor a 1000'),
			array('COM_TELEFONO', 'numerical','min'=>0, 'tooSmall'=>'', 'tooBig'=>''),
			array('COM_N_HOGARES', 'validarNumeroHogares'),
			array('COM_TELEFONO', 'validarTelefono'),
			
			//Función para que sea solo números, letras y #
			array('COM_NOMBRE','validarNumeroLetra'),
			array('COM_DIRECCION','validarNumeroLetraGato'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_CORREL, ADM_RUT, COM_NOMBRE, COM_DIRECCION, COM_N_HOGARES, COMU_ID, COM_TELEFONO, COM_MTS_2', 'safe', 'on'=>'search'),
			
		);
	}

	//Funcion para validar que sea número (natural) 
	 public function validarNumeroHogares($atribute, $params) {
				$n1=$this->COM_N_HOGARES;
				$patron="/^[0-9]+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('COM_N_HOGARES', 'El número de hogares debe ser un número natural (entero y positivo).');
					}
    			}
	 public function validarTelefono($atribute, $params) {
				$n1=$this->COM_TELEFONO;
				$patron="/^([0-9]|[[:space:]])*+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('COM_TELEFONO', 'Teléfono debe seguir el formato de un n° fijo (ej. 412550000)');
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
	//Funcion para validar que sea número, letra o #
	 public function validarNumeroLetraGato($atribute, $params) {
				$nombre=$this->COM_DIRECCION;
				//$patron="/^([a-zA-Z0-9]|[[:space:]]|#|,)*+$/";//Exp. Reg. que debe aplicarse.
				//Primero debe ir o una letra o un número
				//Luego puede o no ir un #
				if(!empty($nombre)){
				$patron="/^([[:alnum:]])([[:alnum:]]|[[:space:]]|,)*((#)?[[:digit:]])?([[:alnum:]]|[[:space:]]|,)*$/";
				
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $nombre)){
					$this->addError('COM_DIRECCION', 'Dirección no válida. Permite solo letras, digitos, comas y #.');
					}
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
			'aRCHIVOs' => array(self::HAS_MANY, 'ARCHIVO', 'COM_CORREL'),
			'aDMRUT' => array(self::BELONGS_TO, 'ADMINISTRADOR', 'ADM_RUT'),
			'eNCUESTAs' => array(self::HAS_MANY, 'ENCUESTA', 'COM_CORREL'),
			'hOGARs' => array(self::HAS_MANY, 'HOGAR', 'COM_CORREL'),
			'tRABAJADORs' => array(self::HAS_MANY, 'TRABAJADOR', 'COM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	 
	 //Etiquetas para cada atributo
	public function attributeLabels()
	{
		return array(
			'COM_CORREL' => 'Identificador',
			'ADM_RUT' => 'Administrador',
			'COM_NOMBRE' => 'Nombre',
			'COM_DIRECCION' => 'Dirección',
			'COM_N_HOGARES' => 'N° Hogares',
			'COMU_ID' => 'Comuna',
			'COM_TELEFONO' => 'Teléfono',
			'COM_MTS_2' => 'Metros cuadrados',
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

		$criteria->compare('COM_CORREL',$this->COM_CORREL);
		//IMPORTANTE: PARA FILTRAR POR USUARIO. SI NO QUIERES QUE MUESTRE LAS COMUNIDADES, HOGARES, CONSERJES QUE NO ESTEN ASOCIADOS AL ADMINISTRADOR CAMBIA LA SIGUIENTE LINEA
		$criteria->compare('ADM_RUT',yii::app()->user->id,true);
		$criteria->compare('COM_NOMBRE',$this->COM_NOMBRE,true);
		$criteria->compare('COM_DIRECCION',$this->COM_DIRECCION,true);
		$criteria->compare('COM_N_HOGARES',$this->COM_N_HOGARES);
		$criteria->compare('COMU_ID',$this->COMU_ID,true);
		$criteria->compare('COM_TELEFONO',$this->COM_TELEFONO,true);
		$criteria->compare('COM_MTS_2',$this->COM_MTS_2);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Comunidad the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
