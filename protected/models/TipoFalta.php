<?php

/**
 * This is the model class for table "TIPOFALTA".
 *
 * The followings are the available columns in table 'TIPOFALTA':
 * @property integer $TFAL_CORREL
 * @property string $TFAL_NOMBRE
 * @property integer $TFAL_MONTO
 *
 * The followings are the available model relations:
 * @property FALTA[] $fALTAs
 */
class TipoFalta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TIPOFALTA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TFAL_MONTO,TFAL_NOMBRE', 'required'),
			array('TFAL_MONTO', 'numerical', 'integerOnly'=>true),
			array('TFAL_NOMBRE', 'length', 'max'=>100),
			array('TFAL_MONTO', 'validarNumeroHogares'),			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TFAL_CORREL, TFAL_NOMBRE, TFAL_MONTO', 'safe', 'on'=>'search'),
		);
	}

	//Funcion para validar que sea número (natural) 
	 public function validarNumeroHogares($atribute, $params) {
				$n1=$this->TFAL_MONTO;
				$patron="/^[0-9]+$/";//Exp. Reg. que debe aplicarse.
				//Si encuentra un string distinto a los señalados muestra un error.
				if(!preg_match($patron, $n1)){
					$this->addError('TFAL_MONTO', 'Monto asignado debe ser un número');					
					}	
				$n2=(int) $n1;				
				if($n2 > 600000)$this->addError('TFAL_MONTO', 'Monto no debe superar los $600.000');	
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
			'fALTAs' => array(self::HAS_MANY, 'FALTA', 'TFAL_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(			
			'TFAL_CORREL' => 'Falta Numero',
			'COM_CORREL' => 'Comunidad',
			'TFAL_NOMBRE' => 'Nombre del tipo de falta',
			'TFAL_MONTO' => 'Monto asignado ($)',
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

		$criteria->compare('TFAL_CORREL',$this->TFAL_CORREL);
		$criteria->compare('COM_CORREL',$com);
		$criteria->compare('TFAL_NOMBRE',$this->TFAL_NOMBRE,true);
		$criteria->compare('TFAL_MONTO',$this->TFAL_MONTO);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoFalta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
