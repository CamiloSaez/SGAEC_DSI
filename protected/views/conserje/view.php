<?php
/* @var $this ConserjeController */
/* @var $model Conserje */

$this->breadcrumbs=array(
	'Conserje'=>array('index'),
	$model->CON_RUT,
);

$this->menu=array(
	array('label'=>'Listar Conserjes', 'url'=>array('index')),
	array('label'=>'Crear Conserje', 'url'=>array('create')),
	array('label'=>'Actualizar Conserje', 'url'=>array('update', 'id'=>$model->CON_RUT)),
	//array('label'=>'Eliminar Conserje', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CON_RUT),'confirm'=>'Esta seuro de eliminar este item?')),
	array('label'=>'Administrar Conserjes', 'url'=>array('admin')),
);
?>

<h1>Ver Conserje #<?php echo $model->CON_RUT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CON_RUT',
		'COM_CORREL',
		'CON_CLAVE',
		'CON_NOMBRE',
		'CON_APELLIDOS',
		'CON_TELEFONO',
		'CON_CORREO',
	),
)); ?>
