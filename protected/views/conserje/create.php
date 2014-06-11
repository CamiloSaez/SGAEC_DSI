<?php
/* @var $this ConserjeController */
/* @var $model Conserje */

$this->breadcrumbs=array(
	'Conserje'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Conserjes', 'url'=>array('index')),
	array('label'=>'Administrar Conserjes', 'url'=>array('admin')),
);
?>

<h1>Crear Conserje</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>