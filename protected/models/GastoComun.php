<?php

/**
 * This is the model class for table "GASTOCOMUN".
 *
 * The followings are the available columns in table 'GASTOCOMUN':
 * @property integer $GAS_CORREL
 * @property integer $HOG_CORREL
 * @property integer $GAS_MONTO
 * @property string $GAS_ESTADO
 *
 * The followings are the available model relations:
 * @property HOGAR $hOGCORREL
 */
class GastoComun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'GASTOCOMUN';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOG_CORREL, GAS_MONTO', 'numerical', 'integerOnly'=>true),
			array('GAS_ESTADO', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('GAS_CORREL, HOG_CORREL, GAS_MONTO, GAS_ESTADO', 'safe', 'on'=>'search'),
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
			'hOGCORREL' => array(self::BELONGS_TO, 'HOGAR', 'HOG_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'GAS_CORREL' => 'Gas Correl',
			'HOG_CORREL' => 'Hog Correl',
			'GAS_MONTO' => 'Gas Monto',
			'GAS_ESTADO' => 'Gas Estado',
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

		$criteria->compare('GAS_CORREL',$this->GAS_CORREL);
		$criteria->compare('HOG_CORREL',$this->HOG_CORREL);
		$criteria->compare('GAS_MONTO',$this->GAS_MONTO);
		$criteria->compare('GAS_ESTADO',$this->GAS_ESTADO,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return GastoComun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
