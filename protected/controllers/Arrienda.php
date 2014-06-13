<?php

/**
 * This is the model class for table "ARRIENDA".
 *
 * The followings are the available columns in table 'ARRIENDA':
 * @property integer $ARR_CORREL
 * @property string $HOG_N_USUARIO
 * @property integer $ESP_CORREL
 * @property string $FECHA
 *
 * The followings are the available model relations:
 * @property ESPACIOCOMUN $eSPCORREL
 * @property HOGAR $hOGNUSUARIO
 */
class Arrienda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ARRIENDA';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('HOG_N_USUARIO, ESP_CORREL', 'required'),
			array('ESP_CORREL', 'numerical', 'integerOnly'=>true),
			array('HOG_N_USUARIO', 'length', 'max'=>100),
			array('FECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARR_CORREL, HOG_N_USUARIO, ESP_CORREL, FECHA', 'safe', 'on'=>'search'),
		);
	}

	/**
	Nos dice si existe un arriendo para esa hora.
	*/
	public function ExisteArriendo()
	{
	
	}
	
	
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'eSPCORREL' => array(self::BELONGS_TO, 'ESPACIOCOMUN', 'ESP_CORREL'),
			'hOGNUSUARIO' => array(self::BELONGS_TO, 'HOGAR', 'HOG_N_USUARIO'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARR_CORREL' => 'Identificador del arriendo',
			'HOG_N_USUARIO' => 'N° de hogar',
			'ESP_CORREL' => 'Espacio común',
			'FECHA' => 'Fecha',
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

		$criteria->compare('ARR_CORREL',$this->ARR_CORREL);
		$criteria->compare('HOG_N_USUARIO',$this->HOG_N_USUARIO,true);
		$criteria->compare('ESP_CORREL',$this->ESP_CORREL);
		$criteria->compare('FECHA',$this->FECHA,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Arrienda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
