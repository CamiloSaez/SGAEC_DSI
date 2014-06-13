
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajador'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Trabajador', 'url'=>array('index')),
	array('label'=>'Administrar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Crear Trabajador</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

