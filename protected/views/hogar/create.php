<?php
/* @var $this HogarController */
/* @var $model Hogar */

$this->breadcrumbs=array(
	'Hogares'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Hogar', 'url'=>array('index')),
	array('label'=>'Administrar Hogar', 'url'=>array('admin')),
);
?>

<h1>Crear Hogar</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>