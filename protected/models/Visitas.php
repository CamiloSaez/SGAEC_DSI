<?php

/**
 * This is the model class for table "VISITAS".
 *
 * The followings are the available columns in table 'VISITAS':
 * @property integer $VIS_CORREL
 * @property string $VIS_RUT
 * @property integer $VEH_CORREL
 * @property string $CON_RUT
 * @property string $HOG_N_USUARIO
 * @property string $VIS_NOMBRE
 * @property string $VIS_APELLIDOS
 * @property string $VIS_FECHA
 *
 * The followings are the available model relations:
 * @property HOGAR $hOGNUSUARIO
 * @property CONSERJE $cONRUT
 * @property VEHICULOS $vEHCORREL
 */
class Visitas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'VISITAS';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('VIS_RUT, CON_RUT, HOG_N_USUARIO', 'required'),
			array('VEH_CORREL', 'numerical', 'integerOnly'=>true),
			array('VIS_RUT, CON_RUT', 'length', 'max'=>12),
			array('HOG_N_USUARIO, VIS_NOMBRE, VIS_APELLIDOS', 'length', 'max'=>100),
			array('VIS_FECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('VIS_CORREL, VIS_RUT, VEH_CORREL, CON_RUT, HOG_N_USUARIO, VIS_NOMBRE, VIS_APELLIDOS, VIS_FECHA', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'hOGNUSUARIO' => array(self::BELONGS_TO, 'HOGAR', 'HOG_N_USUARIO'),
			'cONRUT' => array(self::BELONGS_TO, 'Conserje', 'CON_RUT'), //Relación con conserje
			'vEHCORREL' => array(self::BELONGS_TO, 'VEHICULOS', 'VEH_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'VIS_CORREL' => 'Identificador',
			'VIS_RUT' => 'Rut visita',
			'VEH_CORREL' => 'Vehiculo',
			'CON_RUT' => 'Conserje',
			'HOG_N_USUARIO' => 'N° hogar',
			'VIS_NOMBRE' => 'Nombre visita',
			'VIS_APELLIDOS' => 'Apellido visita',
			'VIS_FECHA' => 'Fecha',
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

		$criteria->compare('VIS_CORREL',$this->VIS_CORREL);
		$criteria->compare('VIS_RUT',$this->VIS_RUT,true);
		$criteria->compare('VEH_CORREL',$this->VEH_CORREL);
		$criteria->compare('CON_RUT',yii::app()->user->id,true);
		$criteria->compare('HOG_N_USUARIO',$this->HOG_N_USUARIO,true);
		$criteria->compare('VIS_NOMBRE',$this->VIS_NOMBRE,true);
		$criteria->compare('VIS_APELLIDOS',$this->VIS_APELLIDOS,true);
		$criteria->compare('VIS_FECHA',$this->VIS_FECHA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Visitas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
