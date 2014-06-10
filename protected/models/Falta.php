<?php

/**
 * This is the model class for table "falta".
 *
 * The followings are the available columns in table 'falta':
 * @property integer $FAL_CORREL
 * @property integer $TFAL_CORREL
 * @property string $CON_RUT
 * @property string $HOG_N_USUARIO
 * @property string $FAL_DESCRIPCION
 * @property string $FAL_FECHA
 *
 * The followings are the available model relations:
 * @property Tipofalta $tFALCORREL
 * @property Hogar $hOGNUSUARIO
 * @property Conserje $cONRUT
 */
class Falta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'FALTA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
		//	array('TFAL_CORREL, CON_RUT, HOG_N_USUARIO', 'required'),
			array('TFAL_CORREL, HOG_N_USUARIO, COM_CORREL', 'required'),
			array('COM_CORREL', 'numerical', 'integerOnly'=>true),
			array('TFAL_CORREL', 'numerical', 'integerOnly'=>true),
			array('CON_RUT', 'length', 'max'=>12),
			array('HOG_N_USUARIO', 'length', 'max'=>100),
			array('FAL_DESCRIPCION', 'length', 'max'=>1024),
			array('FAL_FECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('COM_CORREL,FAL_CORREL, TFAL_CORREL, CON_RUT, HOG_N_USUARIO, FAL_DESCRIPCION, FAL_FECHA', 'safe', 'on'=>'search'),
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
			'cOMCORREL' => array(self::BELONGS_TO, 'COMUNIDAD', 'COM_CORREL'),
			'tFALCORREL' => array(self::BELONGS_TO, 'Tipofalta', 'TFAL_CORREL'),
			'hOGNUSUARIO' => array(self::BELONGS_TO, 'Hogar', 'HOG_N_USUARIO'),
			'cONRUT' => array(self::BELONGS_TO, 'Conserje', 'CON_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(			
			'FAL_CORREL' => 'Falta Nº',
			'COM_CORREL' => 'Comunidad',
			'TFAL_CORREL' => 'Falta tipo',
			'CON_RUT' => 'Rut conserje registrador',
			'HOG_N_USUARIO' => 'Username Propietario',
			'FAL_DESCRIPCION' => 'Descripción',
			'FAL_FECHA' => 'Fecha registro',
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

		$criteria->compare('FAL_CORREL',$this->FAL_CORREL);
		$criteria->compare('COM_CORREL',$com);
		$criteria->compare('TFAL_CORREL',$this->TFAL_CORREL);
		$criteria->compare('CON_RUT',$this->CON_RUT,true);
		$criteria->compare('HOG_N_USUARIO',$this->HOG_N_USUARIO,true);
		$criteria->compare('FAL_DESCRIPCION',$this->FAL_DESCRIPCION,true);
		$criteria->compare('FAL_FECHA',$this->FAL_FECHA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Falta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
