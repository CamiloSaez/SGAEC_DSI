<?php
/* @var $this GastoComunController */
/* @var $model GastoComun */

$this->breadcrumbs=array(
	'Gasto Comuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GastoComun', 'url'=>array('index')),
	array('label'=>'Manage GastoComun', 'url'=>array('admin')),
);
?>

<h1>Create GastoComun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>