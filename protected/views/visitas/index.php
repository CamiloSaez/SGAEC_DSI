<div class="span8">

<?php
/* @var $this VisitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Visitases',
);

$this->menu=array(
	array('label'=>'Crear Visitas', 'url'=>array('create')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>Visitases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>