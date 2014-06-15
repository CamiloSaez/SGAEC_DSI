<?php

class ArriendaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}


		public function accessRules()
	{
		return array(
		
					array('allow',  			 						
						'actions'=>array('view','index'),	
						"roles"=>array('conserje'),				
					),					
					//Administrador puede:
					array('allow',  			 						
						'actions'=>array('view','index','admin'),	
						"roles"=>array('admin'),				
					),																
					array('allow',  			 						
						'actions'=>array('view','create','update','delete','index','admin','error'),	
						"roles"=>array('hogar'),				
					),	
					array('deny',  // deny all users
				'users'=>array('*'),
			),
			
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
	/**
	Error
	*/
	public function actionError(){
		$this->render('error');
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
	public function actionCreate()
	{
		$model=new Arrienda;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Arrienda']))
		{
			$model->attributes=$_POST['Arrienda'];
				$e=$model->ESP_CORREL;
				$f=$model->FECHA;
		
			//Verificar si existe o no el arriendo
			$criteria=new CDbCriteria;
			$ahora=date('Y-m-d H:i:s');
			$criteria->condition = "ESP_CORREL = '$e' AND FECHA ='$f'";
			$var=Arrienda::model()->findAll($criteria);
			$r=false;
			foreach($var as $d){
				$r=true;
			}
			

			// is the end date more ancient than the start date?
			if(strtotime($ahora)>strtotime($model->FECHA)){
				$r=true;
			}
			
			
			if( yii::app()->user->checkAccess("hogar")&&!$r){
				$user= yii::app()->user->id;
				$model->HOG_N_USUARIO=yii::app()->user->id;
				if($model->save()){
					$model->insertar($model->HOG_N_USUARIO,$model->getMonto($model->ESP_CORREL),$model->getDesc($model->ESP_CORREL));
					$this->redirect(array('admin'));
					}
			}else{  
				$this->redirect(array('error'));
			}
		}
		
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Arrienda']))
		{
			$model->attributes=$_POST['Arrienda'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->FECHA));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
	if(isset($_POST['Arrienda']))
		{
	
	$user= yii::app()->user->id;
	//$com= yii::app()->user->comunidad;
	if( yii::app()->user->checkAccess("hogar") ){
		$dataProvider=new CActiveDataProvider('Arrienda', array(
    'criteria'=>array(
        'condition'=>"HOG_N_USUARIO = '$user'",               
    	),
    ));
		
		}else{
		$com= yii::app()->user->comunidad;
		$dataProvider=new CActiveDataProvider('Arrienda', array(
			'criteria'=>array(
				'condition'=>"HOG_N_USUARIO IN(SELECT HOG_N_USUARIO FROM HOGAR WHERE COM_CORREL='$com')",               
				),
			));
		
		}
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		
		}else{
		$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		
		}
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Arrienda('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Arrienda']))
			$model->attributes=$_GET['Arrienda'];
			
		
		$user= yii::app()->user->id;
		
		if( yii::app()->user->checkAccess("hogar") ){
			$dataProvider=new CActiveDataProvider('Arrienda', array(
			'criteria'=>array(
			'condition'=>"HOG_N_USUARIO = '$user'",               
			),
		));
		
		}else{
		$com= yii::app()->user->comunidad;
		$dataProvider=new CActiveDataProvider('Arrienda',array(
			'criteria'=>array(
				'condition'=>"HOG_N_USUARIO IN(SELECT HOG_N_USUARIO FROM HOGAR WHERE COM_CORREL='$com')",               
				),
			));
		
		}
		
		$this->render('admin',array(
			'model'=>$model,
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Arrienda the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Arrienda::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Arrienda $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='arrienda-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
