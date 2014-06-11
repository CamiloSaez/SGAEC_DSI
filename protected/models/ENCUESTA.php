<?php

/**
 * This is the model class for table "ENCUESTA".
 *
 * The followings are the available columns in table 'ENCUESTA':
 * @property integer $ENC_CORREL
 * @property integer $COM_CORREL
 * @property string $ENC_PREGUNTA
 *
 * The followings are the available model relations:
 * @property COMUNIDAD $cOMCORREL
 * @property RESPUESTA[] $rESPUESTAs
 */
class ENCUESTA extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ENCUESTA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_CORREL', 'numerical', 'integerOnly'=>true),
			array('ENC_PREGUNTA', 'length', 'max'=>1024),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ENC_CORREL, COM_CORREL, ENC_PREGUNTA', 'safe', 'on'=>'search'),
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
			'rESPUESTAs' => array(self::HAS_MANY, 'RESPUESTA', 'ENC_CORREL'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ENC_CORREL' => 'Enc Correl',
			'COM_CORREL' => 'Com Correl',
			'ENC_PREGUNTA' => 'Enc Pregunta',
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

		$criteria->compare('ENC_CORREL',$this->ENC_CORREL);
		$criteria->compare('COM_CORREL',$this->COM_CORREL);
		$criteria->compare('ENC_PREGUNTA',$this->ENC_PREGUNTA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ENCUESTA the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
