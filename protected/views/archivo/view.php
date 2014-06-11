<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->ARC_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Archivos', 'url'=>array('index')),
	array('label'=>'Crear Archivo', 'url'=>array('create')),
	//array('label'=>'Actualizar Archivo', 'url'=>array('update', 'id'=>$model->ARC_CORREL)),
	//array('label'=>'Eliminar Archivo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ARC_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Archivo', 'url'=>array('admin')),
);
?>

<h1>Ver Archivo #<?php echo $model->ARC_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ARC_CORREL',
		'COM_CORREL',
		'ARC_ARCHIVO',
		'ARC_PERFIL',
	),
)); ?>
