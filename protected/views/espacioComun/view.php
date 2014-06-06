
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ESP_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
	array('label'=>'Actualizar Espacio Común', 'url'=>array('update', 'id'=>$model->ESP_CORREL)),
	array('label'=>'Eliminar Espacio Común', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Espacio Común', 'url'=>array('admin')),
);
?>

<h1>Ver Espacio Común #<?php echo $model->ESP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESP_CORREL',
		'TIP_CORREL',
		'ESP_DESCRIPCION',
	),
)); ?>

