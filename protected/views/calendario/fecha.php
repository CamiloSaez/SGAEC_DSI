
<?php 

$model->$name = ($model->$name!='')? date('Y-m-d',strtotime($model->$name)) : date('Y-m-d');
 
$this->widget('zii.widgets.jui.CJuiDatePicker',
	array('model'=>$model,
		'attribute'=>$name,
		'value'=>$model->$name,
		'language' => 'es',
		'htmlOptions' => array(
			'readonly'=>"readonly"
		),
		'options'=>array(
			'autoSize'=>false,
			'defaultDate'=>$model->$name,
			'dateFormat'=>'yy-mm-dd',
			'buttonImage'=>yii::app()->theme->baseUrl.'/bootstrap/img/calendar.png',
			'buttonImageOnly'=>true,
			'buttonText'=>'Fecha',
			'selectOtherMonths'=>false,
			'showAnim'=>'slide',
			'showButtonPanel'=>false,
			'showOn'=>'button',
			'showOtherMonths'=>true,
			'changeMonth' => true,
			//'changeYear' => 'true',
			'minDate'=>"-7s", //fecha minima... Solo 7 dias!!
			'maxDate'=>'date("Y-m-d")', //fecha maxima
			/* optional: change visual
			* themeUrl: "where the themes for this widget are located?"
			* theme: theme name. Note that there must be a folder under themeUrl with the theme name
			* cssFile: specifies the css file name under the theme folder. You may specify a
			*		  single filename or an array of filenames
			* try http://jqueryui.com/themeroller/
			*/
			//'themeUrl' => Yii::app()->baseUrl.'/css/ui-darkness' ,
			//'theme'=>'ui-darkness',	//try 'bee' also to see the changes
			//'cssFile'=>array('jquery-ui-1.8.16.custom.css' /*,anotherfile.css, etc.css*/),
		),
	));



/*

$model->$name = ($model->$name!='0000-00-00 00:00:00')? date('d-m-Y',strtotime($model->$name)) : date('d-m-Y');
 
$this->widget('zii.widgets.jui.CJuiDatePicker',
	array('model'=>$model,
		'attribute'=>$name,
		'value'=>$model->$name,
		'language' => 'es',
		'htmlOptions' => array(
			'readonly'=>"readonly"
		),
		'options'=>array(
			'autoSize'=>false,
			'defaultDate'=>$model->$name,
			'dateFormat'=>'dd-mm-YY',
			'buttonImage'=> yii::app()->theme->baseUrl. '/bootstrap/img/calendar.png',
			'buttonImageOnly'=>true,
			'buttonText'=>'Fecha',
			'selectOtherMonths'=>true,
			'showAnim'=>'slide',
			'showButtonPanel'=>false,
			'showOn'=>'button',
			'showOtherMonths'=>true,
			'changeMonth' => true,
			//'changeYear' => 'true',
			'minDate'=>"-1m", //fecha minima
			'maxDate'=>'date("d-m-Y")',//"+10Y", //fecha maxima
			/* optional: change visual
			* themeUrl: "where the themes for this widget are located?"
			* theme: theme name. Note that there must be a folder under themeUrl with the theme name
			* cssFile: specifies the css file name under the theme folder. You may specify a
			*		  single filename or an array of filenames
			* try http://jqueryui.com/themeroller/
			
			//'themeUrl' => Yii::app()->baseUrl.'/css/ui-darkness' ,
			//'theme'=>'ui-darkness',	//try 'bee' also to see the changes
			//'cssFile'=>array('jquery-ui-1.8.16.custom.css' /*,anotherfile.css, etc.css),
		),
	));

*/ 

 ?>

