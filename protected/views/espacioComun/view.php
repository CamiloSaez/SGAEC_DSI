
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	$model->ESP_CORREL,
);

$this->menu=array(
	array('label'=>'Listar EspacioComun', 'url'=>array('index')),
	array('label'=>'Crear EspacioComun', 'url'=>array('create')),
	array('label'=>'Actualizar EspacioComun', 'url'=>array('update', 'id'=>$model->ESP_CORREL)),
	array('label'=>'Delete EspacioComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Ver EspacioComun #<?php echo $model->ESP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailVer', array(
	'data'=>$model,
	'attributes'=>array(
		'ESP_CORREL',
		'TIP_CORREL',
		'ESP_DESCRIPCION',
	),
)); ?>

