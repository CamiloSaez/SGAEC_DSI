<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	$model->TIP_CORREL,
);

$this->menu=array(
	array('label'=>'List TipoEspComun', 'url'=>array('index')),
	array('label'=>'Create TipoEspComun', 'url'=>array('create')),
	array('label'=>'Update TipoEspComun', 'url'=>array('update', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Delete TipoEspComun', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TIP_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>View TipoEspComun #<?php echo $model->TIP_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TIP_CORREL',
		'TIP_NOMBRE',
	),
)); ?>
