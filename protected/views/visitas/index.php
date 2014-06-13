<div class="span8">

<?php
/* @var $this VisitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitases',
);
if(!yii::app()->user->checkAccess("hogar") ){
$this->menu=array(
	array('label'=>'Crear Visitas', 'url'=>array('create')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
}


?>

<h1>Visitas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
