<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	$model->ESP_CORREL,
);

$this->menu=array(
	array('label'=>'List EspacioComun', 'url'=>array('index')),
	array('label'=>'Create EspacioComun', 'url'=>array('create')),
	array('label'=>'Update EspacioComun', 'url'=>array('update', 'id'=>$model->ESP_CORREL)),
	array('label'=>'Delete EspacioComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage EspacioComun', 'url'=>array('admin')),
);
?>

<h1>View EspacioComun #<?php echo $model->ESP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESP_CORREL',
		'TIP_CORREL',
		'ESP_DESCRIPCION',
	),
)); ?>
