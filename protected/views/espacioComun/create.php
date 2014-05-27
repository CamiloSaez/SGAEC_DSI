<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List EspacioComun', 'url'=>array('index')),
	array('label'=>'Manage EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Create EspacioComun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>