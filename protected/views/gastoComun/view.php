<?php
/* @var $this GastoComunController */
/* @var $model GastoComun */

$this->breadcrumbs=array(
	'Gasto Comuns'=>array('index'),
	$model->GAS_CORREL,
);

$this->menu=array(
	array('label'=>'List GastoComun', 'url'=>array('index')),
	array('label'=>'Create GastoComun', 'url'=>array('create')),
	array('label'=>'Update GastoComun', 'url'=>array('update', 'id'=>$model->GAS_CORREL)),
	array('label'=>'Delete GastoComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->GAS_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage GastoComun', 'url'=>array('admin')),
);
?>

<h1>View GastoComun #<?php echo $model->GAS_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'GAS_CORREL',
		'HOG_CORREL',
		'GAS_MONTO',
		'GAS_ESTADO',
	),
)); ?>
