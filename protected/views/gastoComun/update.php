<?php
/* @var $this GastoComunController */
/* @var $model GastoComun */

$this->breadcrumbs=array(
	'Gasto Comuns'=>array('index'),
	$model->GAS_CORREL=>array('view','id'=>$model->GAS_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List GastoComun', 'url'=>array('index')),
	array('label'=>'Create GastoComun', 'url'=>array('create')),
	array('label'=>'View GastoComun', 'url'=>array('view', 'id'=>$model->GAS_CORREL)),
	array('label'=>'Manage GastoComun', 'url'=>array('admin')),
);
?>

<h1>Update GastoComun <?php echo $model->GAS_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>