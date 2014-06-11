<?php

class SaludoController extends Controller{
	
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
			if($model->validate() && $model->cambiar())				
				$this->redirect(array('/saludo/index'));				
		}
 $this->render('index',compact('model'));

	}

}