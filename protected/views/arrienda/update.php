

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendas'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Arrendar', 'url'=>array('create')),
	array('label'=>'Administrar Arriendos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Arriendo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


