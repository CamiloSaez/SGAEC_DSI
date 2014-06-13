<?php

/**
 * This is the model class for table "TIPO_ESP_COMUN".
 *
 * The followings are the available columns in table 'TIPO_ESP_COMUN':
 * @property integer $TIP_CORREL
 * @property string $TIP_NOMBRE
 *
 * The followings are the available model relations:
 * @property ESPACIOCOMUN[] $eSPACIOCOMUNs
 */
class TipoEspComun extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'TIPO_ESP_COMUN';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TIP_NOMBRE', 'required'),
			array('TIP_NOMBRE', 'length', 'min'=>2,'max'=>50),
			array('TIP_NOMBRE', 'match', 'pattern'=>'/^[a-zÃ¡Ã©Ã­Ã³ÃºÃ±\s]+$/i','message'=>'Porfavor ingrese solo letras'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('TIP_CORREL, TIP_NOMBRE', 'safe', 'on'=>'search'),
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
			'eSPACIOCOMUNs' => array(self::HAS_MANY, 'ESPACIOCOMUN', 'TIP_CORREL'),
			'cOMCORREL' => array(self::BELONGS_TO, 'Administrador', 'ADM_RUT'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ADM_RUT' => 'Identificador administrador',
			'TIP_CORREL' => 'Identificador tipo de espacio común',
			'TIP_NOMBRE' => 'Tipo de espacio común',
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

		$criteria->compare('TIP_CORREL',$this->TIP_CORREL);
		$criteria->compare('TIP_NOMBRE',$this->TIP_NOMBRE,true);
		$criteria->compare('ADM_RUT',$this->ADM_RUT,true);
		//$criteria->compare('COM_CORREL',yii::app()->user->comunidad,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return TipoEspComun the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}