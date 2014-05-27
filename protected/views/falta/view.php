<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->FAL_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Ingresar Falta', 'url'=>array('create')),
	array('label'=>'Actualizar Falta', 'url'=>array('update', 'id'=>$model->FAL_CORREL)),
	array('label'=>'Eliminar Falta', 'url'=> array('delete','id'=>$model->FAL_CORREL),'confirm'=>'¿Esta usted seguro de eliminar este item?'),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Falta Nº <?php echo $model->FAL_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'FAL_CORREL',
		'TFAL_CORREL',
		'CON_RUT',
		'HOG_N_USUARIO',
		'FAL_DESCRIPCION',
		'FAL_FECHA',
	),
)); ?>
