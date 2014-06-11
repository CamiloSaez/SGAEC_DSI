<?php
/* @var $this ENCUESTAController */
/* @var $model ENCUESTA */

$this->breadcrumbs=array(
	'Encuestas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ENCUESTA', 'url'=>array('index')),
	array('label'=>'Manage ENCUESTA', 'url'=>array('admin')),
);
?>

<h1>Create ENCUESTA</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>