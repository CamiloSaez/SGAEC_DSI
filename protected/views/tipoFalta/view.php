<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),
	$model->TFAL_CORREL,
);

$this->menu=array(
	array('label'=>'List TipoFalta', 'url'=>array('index')),
	array('label'=>'Create TipoFalta', 'url'=>array('create')),
	array('label'=>'Update TipoFalta', 'url'=>array('update', 'id'=>$model->TFAL_CORREL)),
	array('label'=>'Delete TipoFalta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TFAL_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoFalta', 'url'=>array('admin')),
);
?>

<h1>View TipoFalta #<?php echo $model->TFAL_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TFAL_CORREL',
		'TFAL_NOMBRE',
		'TFAL_MONTO',
	),
)); ?>
