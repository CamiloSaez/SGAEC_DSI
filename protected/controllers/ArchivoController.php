<?php

class ArchivoController extends Controller
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
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}
		public function accessRules()
	{
		return array(				

			array('allow',  // allow all users to perform 'index' and 'view' actions				 				 
				'actions'=>array('index'),				
				"roles"=>array('conserje'),				
			),	
				array('allow',  // allow all users to perform 'index' and 'view' actions				 				 
				'actions'=>array('index'),				
				"roles"=>array('hogar'),				
			),					

			array('deny',  // allow all users to perform 'index' and 'view' actions				 				 
				 'actions'=>array('update'),				
				"roles"=>array('admin'),			
			),	

			array('deny',  // allow all users to perform 'index' and 'view' actions				 
				 'controllers'=>array("archivo"),
				 'actions'=>array('view','create','update','delete', 'admin'),				
				"roles"=>array('conserje'),			
			),			
		
		array('deny',  // allow all users to perform 'index' and 'view' actions				 
				 'controllers'=>array("archivo"),
				 'actions'=>array('view','create','update','delete', 'admin'),				
				"roles"=>array('hogar'),			
			),	);
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
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Archivo;

	    if(isset($_POST["Archivo"]))
        {
            $model->attributes=$_POST['Archivo'];
			$model->COM_CORREL= yii::app()->user->comunidad;	
            
			if($model->validate())
            {
               /**
                * realizamos el upload delarchivo
                * 
				*/
               $file=CUploadedFile::getInstance($model,"ARC_ARCHIVO");
                //echo $file->getExtensionName();exit;
               //die("estamos aqui");
               $name=$file->getName();
			   $x=$file->getExtensionName();
               //die("name=".$name);
               if($x == 'pdf')
               {
                    $file->saveAs(Yii::getPathOfAlias("webroot")."/uploads/".$name);
               }
			   /*else
               {
                 $model->addError('ARC_ARCHIVO', 'Archivo inv&aacute;lido S&oacute;lo PDF');
               }
               
               /**
                * se hace el insert del registro
                * 
				*/
               $guardar=$model->insert($name, $model->COM_CORREL);
			   
               if($guardar)
               {
                    Yii::app()->user->setFlash('mensaje','El registro se ha creado exitosamente');
                    $this->redirect(Yii::app()->request->baseUrl."/index.php?r=archivo");
               }
            }
        }
        
		$this->render('create',compact("model"));
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

		if(isset($_POST['Archivo']))
		{
			$model->attributes=$_POST['Archivo'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->ARC_CORREL));
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
		/*$dataProvider=new CActiveDataProvider('Archivo');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));*/
		
		$user= yii::app()->user->id;
	    $com= yii::app()->user->comunidad;	
/*
    if( yii::app()->user->checkAccess("conserje") ){
	
	//$cons= Conserje::model()->findAll("COM_CORREL='$com'");

	$dataProvider=new CActiveDataProvider('Archivo', array(
    'criteria'=>array(
     'condition'=>"COM_CORREL = '$com'",               
    	),
    ));

    	$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	
		}
	
*/
	if( yii::app()->user->checkAccess("admin") or yii::app()->user->checkAccess("conserje")){

	$dataProvider=new CActiveDataProvider('Archivo', array(
    	'criteria'=>array(
        'condition'=>"COM_CORREL = '$com'",               
    	),
    ));

 $this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
		}

	
	
	if( yii::app()->user->checkAccess("hogar") ){
	$dataProvider=new CActiveDataProvider('Archivo', array(
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
		$model=new Archivo('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Archivo']))
			$model->attributes=$_GET['Archivo'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Archivo the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Archivo::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Archivo $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='archivo-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
