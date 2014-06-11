<?php
/* @var $this HogarController */
/* @var $model Hogar */

$this->breadcrumbs=array(
	'Hogares'=>array('index'),
	$model->HOG_N_USUARIO,
);

$this->menu=array(
	array('label'=>'Listar Hogar', 'url'=>array('index')),
	array('label'=>'Crear Hogar', 'url'=>array('create')),
	array('label'=>'Actualizar Hogar', 'url'=>array('update', 'id'=>$model->HOG_N_USUARIO)),
	//array('label'=>'Eliminar Hogar', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->HOG_N_USUARIO),'confirm'=>'Ud. está seguro de eliminar este item?')),
	array('label'=>'Administrar Hogar', 'url'=>array('admin')),
);
?>

<h1>Hogar #<?php echo $model->HOG_N_HOGAR; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'HOG_RUT',
		'COM_CORREL',
		'HOG_CLAVE',
		'HOG_N_HOGAR',
		'HOG_MCUADRADOS',
		'HOG_NOMBRE',
		'HOG_APELLIDOS',
		'HOG_TELEFONO',
		'HOG_CORREO',
		'HOG_N_USUARIO',
	),
)); ?>
