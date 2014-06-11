<?php
/* @var $this ConserjeController */
/* @var $model Conserje */

$this->breadcrumbs=array(
	'Conserje'=>array('index'),
	$model->CON_RUT=>array('view','id'=>$model->CON_RUT),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Conserjes', 'url'=>array('index')),
	array('label'=>'Crear Conserje', 'url'=>array('create')),
	array('label'=>'Ver Conserje', 'url'=>array('view', 'id'=>$model->CON_RUT)),
	array('label'=>'Administrar Conserjes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Conserje <?php echo $model->CON_RUT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>