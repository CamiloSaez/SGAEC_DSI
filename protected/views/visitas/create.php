
<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>Crear Visitas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

