<?php

/**
 * This is the model class for table "USUARIO".
 *
 * The followings are the available columns in table 'USUARIO':
 * @property string $USU_RUT
 * @property string $USU_CLAVE
 * @property string $USU_ROL
 *
 * The followings are the available model relations:
 * @property ADMINISTRADOR $aDMINISTRADOR
 * @property CONSERJE $cONSERJE
 * @property HOGAR $hOGAR
 * @property TRABAJADOR $tRABAJADOR
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'USUARIO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('USU_RUT', 'required'),
			array('USU_RUT', 'length', 'max'=>12),
			array('USU_CLAVE', 'length', 'max'=>1024),
			array('USU_ROL', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('USU_RUT, USU_CLAVE, USU_ROL', 'safe', 'on'=>'search'),
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
			'aDMINISTRADOR' => array(self::HAS_ONE, 'ADMINISTRADOR', 'USU_RUT'),
			'cONSERJE' => array(self::HAS_ONE, 'CONSERJE', 'USU_RUT'),
			'hOGAR' => array(self::HAS_ONE, 'HOGAR', 'USU_RUT'),
			'tRABAJADOR' => array(self::HAS_ONE, 'TRABAJADOR', 'USU_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'USU_RUT' => 'Usu Rut',
			'USU_CLAVE' => 'Usu Clave',
			'USU_ROL' => 'Usu Rol',
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

		$criteria->compare('USU_RUT',$this->USU_RUT,true);
		$criteria->compare('USU_CLAVE',$this->USU_CLAVE,true);
		$criteria->compare('USU_ROL',$this->USU_ROL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
