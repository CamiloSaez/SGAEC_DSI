

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listarar Arrienda', 'url'=>array('index')),
	array('label'=>'Administrar Arrienda', 'url'=>array('admin')),
);
?>

<h1>Crear Arrienda</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

