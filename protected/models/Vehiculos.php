<?php

/**
 * This is the model class for table "VEHICULOS".
 *
 * The followings are the available columns in table 'VEHICULOS':
 * @property integer $VEH_CORREL
 * @property string $VEH_PATENTE
 *
 * The followings are the available model relations:
 * @property VISITAS[] $vISITASes
 */
class Vehiculos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'VEHICULOS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VEH_PATENTE', 'length', 'min'=>6 ,'max'=>6),
			array('VEH_PATENTE', 'validarPatente'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('VEH_CORREL, VEH_PATENTE', 'safe', 'on'=>'search'),
		);
	}

	//Funcion para validar que sea número (natural) 
	 public function validarPatente($atribute, $params) {
	$patente = $this->VEH_PATENTE;

	$regex = "/^[A-Z]{2}[\.\- ]?[0-9]{2}[\.\- ]?[0-9]{2}|[B-D,F-H,J-L,P,R-T,V-Z]{2}[\-\. ]?[B-D,F-H,J-L,P,R-T,V-Z]{2}[\.\- ]?[0-9]{2}$/";
    if (!preg_match($regex, $patente)){
    	$this->addError('VEH_PATENTE', 'El número de patente es inválido');
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
			'vISITASes' => array(self::HAS_MANY, 'VISITAS', 'VEH_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'VEH_CORREL' => 'Codigo Vehículo',
			'VEH_PATENTE' => 'Patente del Vehículo ',
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

		$criteria->compare('VEH_CORREL',$this->VEH_CORREL);
		$criteria->compare('VEH_PATENTE',$this->VEH_PATENTE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Vehiculos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
