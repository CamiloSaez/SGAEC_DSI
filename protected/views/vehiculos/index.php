<div class="span8">

<?php
/* @var $this VehiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehículos',
);

$this->menu=array(
	array('label'=>'Crear Vehículos', 'url'=>array('create')),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),
);
?>

<h1>Vehículos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
