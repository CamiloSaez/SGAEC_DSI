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
			array('HOG_N_USUARIO, ESP_CORREL, FECHA', 'required'),
			array('ESP_CORREL', 'numerical', 'integerOnly'=>true),
			array('HOG_N_USUARIO', 'length', 'max'=>100),
			array('FECHA', 'match', 'pattern'=>'/2[0-9]{3}.[0-1]{1}[0-9]{1}.[0-3]{1}[0-9]{1}[[:space:]][0-9]{2}.[0]{2}/','message'=>'Por favor ingrese fecha correcta.'),
			
			array('FECHA', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARR_CORREL, HOG_N_USUARIO, ESP_CORREL, FECHA', 'safe', 'on'=>'search'),
		);
	}
	
	

	
	
	public function getMonto($var){
		$connection = Yii::app()->db;
		$sql = "SELECT `ESP_VALOR` FROM `ESPACIOCOMUN` WHERE `ESP_CORREL`='$var'";
		$command = $connection->createCommand($sql);
		//$dataReader = 
		return $command->queryScalar();
	}
	
	public function getDesc($var){
		//SELECT `ESP_DESCRIPCION` FROM `ESPACIOCOMUN` WHERE `ESP_CORREL`='$var'
		$connection = Yii::app()->db;
		$sql = "SELECT `ESP_DESCRIPCION` FROM `ESPACIOCOMUN` WHERE `ESP_CORREL`='$var'";
		$command = $connection->createCommand($sql);
		//$dataReader = 
		return $command->queryScalar();
		/*$rows = $dataReader->readAll();
		foreach($rows as $i){
			return $i->ESP_DESCRIPCION;	
		}*/
	}
	
	public function insertar($user,$monto,$des){
	$connection = Yii::app()->db;
	$sql = "INSERT INTO `GASTOCOMUN`(`HOG_N_USUARIO`, `GAS_MONTO`, `GAS_ESTADO`, `GAS_DESCRIPCION`, `GAS_FECHA_INGRESO`) 
	VALUES ('$user',$monto,0,'$des',now())";
	$command = $connection->createCommand($sql);
	$dataReader = $command->query();
	//$rows = $dataReader->readAll();
	
	} 
	
	
	
	
	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'eSPCORREL' => array(self::BELONGS_TO, 'EspacioComun', 'ESP_CORREL'),
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
		$criteria->compare('eSPCORREL.ESP_CORREL',$this->ESP_DESCRIPCION);
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
