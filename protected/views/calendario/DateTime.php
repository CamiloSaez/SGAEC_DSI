
<?php 

$model->$name = ($model->$name!='')? date('Y-m-d',strtotime($model->$name)) : date('Y-m-d');
 
$this->widget('zii.widgets.jui.CJuiDatePicker', array(
    'model'=>$model, 'attribute'=>$name,
    'options'=>array(
        'dateFormat'=>'yy-mm-dd',
        'yearRange'=>'-70:+0',
        'changeYear'=>'true',
        'changeMonth'=>'true',
	    'buttonImage'=>yii::app()->theme->baseUrl.'/bootstrap/img/calendar.png',
    ),
)); 
 

 ?>

