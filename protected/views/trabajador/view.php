
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajador'=>array('index'),
	$model->TRA_RUT,
);

$this->menu=array(
	array('label'=>'Listar Trabajador', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Actualizar Trabajador', 'url'=>array('update', 'id'=>$model->TRA_RUT)),
	array('label'=>'Eliminar Trabajador', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TRA_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Ver Trabajador #<?php echo $model->TRA_RUT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TRA_RUT',
		/*'COM_CORREL',*/
		'TRA_NOMBRE',
		'TRA_APELLIDOS',
		/*'TRA_TELEFONO',
		'TRA_FEC_CONTRATO',*/
		'TRA_CARGO',
		/*'TRA_SUELDO',*/
	),
)); ?>

