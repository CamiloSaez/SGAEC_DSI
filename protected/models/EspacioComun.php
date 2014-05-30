<?php

/**
 * This is the model class for table "ESPACIOCOMUN".
 *
 * The followings are the available columns in table 'ESPACIOCOMUN':
 * @property integer $ESP_CORREL
 * @property integer $TIP_CORREL
 * @property string $ESP_DESCRIPCION
 *
 * The followings are the available model relations:
 * @property HOGAR[] $hOGARs
 * @property TIPOESPCOMUN $tIPCORREL
 */
class EspacioComun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ESPACIOCOMUN';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIP_CORREL', 'required'),
			array('TIP_CORREL', 'numerical', 'integerOnly'=>true),
			array('ESP_DESCRIPCION', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ESP_CORREL, TIP_CORREL, ESP_DESCRIPCION', 'safe', 'on'=>'search'),
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
			'hOGARs' => array(self::MANY_MANY, 'HOGAR', 'ARRIENDA(ESP_CORREL, HOG_N_USUARIO)'),
			'tIPCORREL' => array(self::BELONGS_TO, 'TIPOESPCOMUN', 'TIP_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ESP_CORREL' => 'Identificador espacio común',
			'TIP_CORREL' => 'Tipo de espacio común',
			'ESP_DESCRIPCION' => 'Descripción',
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

		$criteria->compare('ESP_CORREL',$this->ESP_CORREL);
		$criteria->compare('TIP_CORREL',$this->TIP_CORREL);
		$criteria->compare('ESP_DESCRIPCION',$this->ESP_DESCRIPCION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return EspacioComun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
