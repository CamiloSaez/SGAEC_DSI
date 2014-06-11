<?php
/* @var $this HogarController */
/* @var $model Hogar */

$this->breadcrumbs=array(
	'Hogares'=>array('index'),
	$model->HOG_N_USUARIO=>array('view','id'=>$model->HOG_N_USUARIO),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Hogar', 'url'=>array('index')),
	array('label'=>'Crear Hogar', 'url'=>array('create')),
	array('label'=>'Ver Hogar', 'url'=>array('view', 'id'=>$model->HOG_N_USUARIO)),
	array('label'=>'Administrar Hogar', 'url'=>array('admin')),
);
?>

<h1>Actualizar Hogar <?php echo $model->HOG_N_HOGAR; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>