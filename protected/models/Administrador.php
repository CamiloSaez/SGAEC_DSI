<?php

/**
 * This is the model class for table "ADMINISTRADOR".
 *
 * The followings are the available columns in table 'ADMINISTRADOR':
 * @property integer $ADM_CORREL
 * @property string $ADM_RUT
 * @property string $ADM_NOMBRE
 * @property string $ADM_APELLIDOS
 * @property integer $ADM_TELEFONO
 * @property integer $ADM_CELULAR
 * @property string $ADM_CORREO
 * @property string $ADM_CLAVE
 *
 * The followings are the available model relations:
 * @property COMUNIDAD[] $cOMUNIDADs
 * @property ESPACIOSCOMUNES[] $eSPACIOSCOMUNESs
 * @property TIPOFALTA[] $tIPOFALTAs
 * @property TRABAJADOR[] $tRABAJADORs
 * @property TURNOS[] $tURNOSes
 */
class Administrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ADMINISTRADOR';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ADM_TELEFONO, ADM_CELULAR', 'numerical', 'integerOnly'=>true),
			array('ADM_RUT', 'length', 'max'=>12),
			array('ADM_NOMBRE, ADM_APELLIDOS', 'length', 'max'=>100),
			array('ADM_CORREO', 'length', 'max'=>150),
			array('ADM_CLAVE', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ADM_CORREL, ADM_RUT, ADM_NOMBRE, ADM_APELLIDOS, ADM_TELEFONO, ADM_CELULAR, ADM_CORREO, ADM_CLAVE', 'safe', 'on'=>'search'),
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
			'cOMUNIDADs' => array(self::HAS_MANY, 'COMUNIDAD', 'ADM_CORREL'),
			'eSPACIOSCOMUNESs' => array(self::HAS_MANY, 'ESPACIOSCOMUNES', 'ADM_CORREL'),
			'tIPOFALTAs' => array(self::HAS_MANY, 'TIPOFALTA', 'ADM_CORREL'),
			'tRABAJADORs' => array(self::HAS_MANY, 'TRABAJADOR', 'ADM_CORREL'),
			'tURNOSes' => array(self::HAS_MANY, 'TURNOS', 'ADM_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ADM_CORREL' => 'Adm Correl',
			'ADM_RUT' => 'Adm Rut',
			'ADM_NOMBRE' => 'Adm Nombre',
			'ADM_APELLIDOS' => 'Adm Apellidos',
			'ADM_TELEFONO' => 'Adm Telefono',
			'ADM_CELULAR' => 'Adm Celular',
			'ADM_CORREO' => 'Adm Correo',
			'ADM_CLAVE' => 'Adm Clave',
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

		$criteria->compare('ADM_CORREL',$this->ADM_CORREL);
		$criteria->compare('ADM_RUT',$this->ADM_RUT,true);
		$criteria->compare('ADM_NOMBRE',$this->ADM_NOMBRE,true);
		$criteria->compare('ADM_APELLIDOS',$this->ADM_APELLIDOS,true);
		$criteria->compare('ADM_TELEFONO',$this->ADM_TELEFONO);
		$criteria->compare('ADM_CELULAR',$this->ADM_CELULAR);
		$criteria->compare('ADM_CORREO',$this->ADM_CORREO,true);
		$criteria->compare('ADM_CLAVE',$this->ADM_CLAVE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
