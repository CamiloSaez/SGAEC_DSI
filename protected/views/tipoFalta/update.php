<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),
	$model->TFAL_CORREL=>array('view','id'=>$model->TFAL_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoFalta', 'url'=>array('index')),
	array('label'=>'Create TipoFalta', 'url'=>array('create')),
	array('label'=>'View TipoFalta', 'url'=>array('view', 'id'=>$model->TFAL_CORREL)),
	array('label'=>'Manage TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Update TipoFalta <?php echo $model->TFAL_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>