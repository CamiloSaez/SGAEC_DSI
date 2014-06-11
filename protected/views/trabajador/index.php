<div class="span8">

<?php
/* @var $this TrabajadorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Trabajador',
);

$this->menu=array(
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Administrar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Trabajadores</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
