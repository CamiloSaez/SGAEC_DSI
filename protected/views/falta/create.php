<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Registrar faltas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>