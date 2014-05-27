<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoFalta', 'url'=>array('index')),
	array('label'=>'Manage TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Create TipoFalta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>