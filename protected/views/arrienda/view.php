

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendos'=>array('index'),
	$model->FECHA,
);

$this->menu=array(
	array('label'=>'Crear Arrienda', 'url'=>array('create')),
	array('label'=>'Eliminar Arrienda', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->FECHA),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Arrienda', 'url'=>array('admin')),
);
?>

<h1>Ver arriendo #<?php echo $model->FECHA; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOG_N_USUARIO',
		'ESP_CORREL',
		'FECHA',
	),
)); ?>


