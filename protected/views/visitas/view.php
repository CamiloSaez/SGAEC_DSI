
<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->VIS_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Crear Visitas', 'url'=>array('create')),
	array('label'=>'Actualizar Visitas', 'url'=>array('update', 'id'=>$model->VIS_CORREL)),
	array('label'=>'Eliminar Visitas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->VIS_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>View Visitas #<?php echo $model->VIS_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'VIS_CORREL',
		'VIS_RUT',
		'VEH_CORREL',
		'CON_RUT',
		'HOG_N_USUARIO',
		'VIS_NOMBRE',
		'VIS_APELLIDOS',
		'VIS_FECHA',
	),
)); ?>

