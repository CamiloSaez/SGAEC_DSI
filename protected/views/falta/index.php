<?php
/* @var $this FaltaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Faltas',
);
?>

<div class="span6">
<h1>Faltas</h1>

<?php
    $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>

<div class="span2">

<?php
if(yii::app()->user->checkAccess("conserje")) $this->menu=array(
	array('label'=>'Registrar Falta', 'url'=>array('create')),
	array('label'=>'Administrar Falta', 'url'=>array('admin')),
);
?>
</div>