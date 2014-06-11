<?php

class ConserjeController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';
	
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Conserje;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Conserje']))
		{
			$model->attributes=$_POST['Conserje'];
			
			$model->COM_CORREL= yii::app()->user->comunidad;
			//Permite guardar en la base de datos con la primera letra en mayuscula
			$model->CON_NOMBRE=Yii::app()->metodos->aOracion($model->CON_NOMBRE); 
			$model->CON_APELLIDOS=Yii::app()->metodos->aOracion($model->CON_APELLIDOS);
			
			/*//permite encriptar la clave del conserje en md5
			$model->CON_CLAVE=md5($model->CON_CLAVE);*/
			
			if($model->save()){
				yii::app()->authManager->assign("conserje",$model->CON_RUT);
				$this->redirect(array('view','id'=>$model->CON_RUT));
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
		yii::app()->authManager->revoke("conserje",$model->CON_RUT);			
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Conserje']))
		{
			$model->attributes=$_POST['Conserje'];
			
			//Permite guardar en la base de datos con la primera letra en mayuscula
			$model->CON_NOMBRE=Yii::app()->metodos->aOracion($model->CON_NOMBRE); 
			$model->CON_APELLIDOS=Yii::app()->metodos->aOracion($model->CON_APELLIDOS);
			
			//permite encriptar la clave del conserje en md5
			/*$model->CON_CLAVE=Yii::app()->metodos->encrypt($model->CON_CLAVE);*/

			if($model->save())
				{	yii::app()->authManager->assign("conserje",$model->CON_RUT);
				$this->redirect(array('view','id'=>$model->CON_RUT));
			}
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
		$model=$this->loadModel($id);
		yii::app()->authManager->revoke("conserje",$model->CON_RUT);

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
	    $com= yii::app()->user->comunidad;	
		if( yii::app()->user->checkAccess("admin") ){

	$dataProvider=new CActiveDataProvider('Conserje', array(
    	'criteria'=>array(
        'condition'=>"COM_CORREL = '$com'",               
    	),
    ));

 $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		}

	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Conserje('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Conserje']))
			$model->attributes=$_GET['Conserje'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Conserje the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Conserje::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations

			//'postOnly + delete', // we only allow deletion via POST request
		);
	}
	/**
	 * Performs the AJAX validation.
	 * @param Conserje $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='conserje-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
