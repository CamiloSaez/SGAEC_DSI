<?php

class CambclaveController extends Controller{
	
	public function actionIndex()
	{
		$model = new CambClave;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='cambClave')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['CambClave']))
		{
			$model->attributes=$_POST['CambClave'];				
			if($model->validate() && $model->cambiar($_POST['CambClave']['nueva_contraseña']))			    							 
				 //$this->redirect(array('/cambclave/index'));							    
					$this->redirect(array('exito'));							    
		}
 $this->render('index',compact('model'));

	}


	public function actionExito()
	{
	
		$this->render('exito');
	}	

}