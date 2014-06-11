<?php
/* @var $this ENCUESTAController */
/* @var $model ENCUESTA */

$this->breadcrumbs=array(
	'Encuestas'=>array('index'),
	$model->ENC_CORREL,
);

$this->menu=array(
	array('label'=>'List ENCUESTA', 'url'=>array('index')),
	array('label'=>'Create ENCUESTA', 'url'=>array('create')),
	array('label'=>'Update ENCUESTA', 'url'=>array('update', 'id'=>$model->ENC_CORREL)),
	array('label'=>'Delete ENCUESTA', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ENC_CORREL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ENCUESTA', 'url'=>array('admin')),
);
?>

<h1>View ENCUESTA #<?php echo $model->ENC_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ENC_CORREL',
		'COM_CORREL',
		'ENC_PREGUNTA',
	),
)); ?>
