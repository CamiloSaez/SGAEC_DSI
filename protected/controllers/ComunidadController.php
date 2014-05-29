<?php

class ComunidadController extends Controller
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
		$model=new Comunidad;
		//$model2= new Comuna;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Comunidad']))//&&$_POST['Comuna']
		{
			$model->attributes=$_POST['Comunidad'];
			//$model2->attributes=$_POST['Comuna'];
			//Linea para que agregue como id del admin al administrador que esta insertando la comunidad
			$model->COM_COMUNA=Yii::app()->metodos->aOracion($model->COM_COMUNA); 
			$model->COM_NOMBRE=Yii::app()->metodos->aOracion($model->COM_NOMBRE); 
			$model->ADM_RUT=yii::app()->user->id;
			if($model->save())
				$this->redirect(array('view','id'=>$model->COM_CORREL));
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

		if(isset($_POST['Comunidad'])&&$model->ADM_RUT==yii::app()->user->id)
		{
		
			$model->attributes=$_POST['Comunidad'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->COM_CORREL));
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
	{	$model=$this->loadModel($id);		
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
		$dataProvider=new CActiveDataProvider('Comunidad');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Comunidad('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Comunidad']))
			$model->attributes=$_GET['Comunidad'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Comunidad the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Comunidad::model()->findByPk($id);
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
	 * @param Comunidad $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='comunidad-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
