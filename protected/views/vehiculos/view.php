
<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	$model->VEH_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Vehículos', 'url'=>array('index')),
	array('label'=>'Crear Vehículos', 'url'=>array('create')),
	array('label'=>'Actualizar Vehículos', 'url'=>array('update', 'id'=>$model->VEH_CORREL)),
	array('label'=>'Eliminar Vehículos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->VEH_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),
);
?>

<h1>Ver Vehículos #<?php echo $model->VEH_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VEH_CORREL',
		'VEH_PATENTE',
	),
)); ?>

