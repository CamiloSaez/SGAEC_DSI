
<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Vehículos', 'url'=>array('index')),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),
);
?>

<h1>Crear Vehículos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

