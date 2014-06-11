
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo de espacio común'=>array('index'),
	$model->TIP_CORREL,
);

$this->menu=array(
	array('label'=>'Listar tipo', 'url'=>array('index')),
	array('label'=>'Crear tipo', 'url'=>array('create')),
	array('label'=>'Actualizar tipo', 'url'=>array('update', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Eliminar tipo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar tipo', 'url'=>array('admin')),
);
?>

<h1>Ver Tipo de espacio común #<?php echo $model->TIP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIP_CORREL',
		'TIP_NOMBRE',
	),
)); ?>

