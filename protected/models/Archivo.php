<?php

/**
 * This is the model class for table "archivo".
 *
 * The followings are the available columns in table 'archivo':
 * @property integer $ARC_CORREL
 * @property integer $COM_CORREL
 * @property string $ARC_ARCHIVO
 * @property string $ARC_PERFIL
 */
class Archivo extends CActiveRecord
{
	private $connection;
	
	 public function __construct()
    {
        //Yii::app()->db->connectionString
        $this->connection=new CDbConnection(Yii::app()->db->connectionString,Yii::app()->db->username,Yii::app()->db->password);
        $this->connection->active=true;
    }
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'ARCHIVO';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('COM_CORREL, ARC_PERFIL', 'required'),
			array('COM_CORREL', 'numerical', 'integerOnly'=>true),
			array('ARC_ARCHIVO', 'length', 'max'=>1024),
			array('ARC_PERFIL', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ARC_CORREL, COM_CORREL, ARC_ARCHIVO, ARC_PERFIL', 'safe', 'on'=>'search'),
		);
	}
	

    public function insert($archivo,$comunidad)
    {
	  
	   if( end( explode('.', $archivo)) == 'pdf' )
	   {
        $sql="INSERT INTO ARCHIVO VALUES(null,?,?,?)";
        $command=$this->connection->createCommand($sql);
        // reemplaza el marcador de posición ":username" con el valor real de username
        $command-> bindValue(1,$comunidad,PDO::PARAM_STR);
        // reemplaza el marcador de posición ":email" con el valor real de email
		$command-> bindValue(2,$archivo,PDO::PARAM_STR);
        $command-> bindValue(3,$_POST["Archivo"]["ARC_PERFIL"],PDO::PARAM_STR);
        
        $command->execute();
        return true;
	  }
	  
	  else{
	  $this->addError('ARC_ARCHIVO', 'Archivo inv&aacute;lido S&oacute;lo PDF');
	  return false;
	  }
    }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ARC_CORREL' => 'Correlativo de archivo',
			'COM_CORREL' => 'Correlativo de comunidad',
			'ARC_ARCHIVO' => 'Seleccione su archivo',
			'ARC_PERFIL' => 'Descripci&oacute;n del archivo',
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
		
		$com=yii::app()->user->comunidad;
		$criteria->compare('ARC_CORREL',$this->ARC_CORREL);
		$criteria->compare('COM_CORREL',$com);
		$criteria->compare('ARC_ARCHIVO',$this->ARC_ARCHIVO,true);
		$criteria->compare('ARC_PERFIL',$this->ARC_PERFIL,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Archivo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
