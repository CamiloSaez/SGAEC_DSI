<?php
/* @var $this ENCUESTAController */
/* @var $model ENCUESTA */

$this->breadcrumbs=array(
	'Encuestas'=>array('index'),
	$model->ENC_CORREL=>array('view','id'=>$model->ENC_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List ENCUESTA', 'url'=>array('index')),
	array('label'=>'Create ENCUESTA', 'url'=>array('create')),
	array('label'=>'View ENCUESTA', 'url'=>array('view', 'id'=>$model->ENC_CORREL)),
	array('label'=>'Manage ENCUESTA', 'url'=>array('admin')),
);
?>

<h1>Update ENCUESTA <?php echo $model->ENC_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>