
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	$model->TIP_CORREL,
);

$this->menu=array(
	array('label'=>'Listar TipoEspComun', 'url'=>array('index')),
	array('label'=>'Crear TipoEspComun', 'url'=>array('create')),
	array('label'=>'Actualizar TipoEspComun', 'url'=>array('update', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Delete TipoEspComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Ver TipoEspComun #<?php echo $model->TIP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailVer', array(
	'data'=>$model,
	'attributes'=>array(
		'TIP_CORREL',
		'TIP_NOMBRE',
	),
)); ?>

