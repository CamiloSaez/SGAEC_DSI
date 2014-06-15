

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Administrar Arriendos', 'url'=>array('admin')),
);
?>

<h1>Crear Arriendo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


