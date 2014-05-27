<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->FAL_CORREL=>array('view','id'=>$model->FAL_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Crear Falta', 'url'=>array('create')),
	array('label'=>'Ver Falta', 'url'=>array('view', 'id'=>$model->FAL_CORREL)),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Falta <?php echo $model->FAL_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>