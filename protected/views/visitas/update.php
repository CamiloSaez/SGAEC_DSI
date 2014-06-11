
<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	$model->VIS_CORREL=>array('view','id'=>$model->VIS_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Crear Visitas', 'url'=>array('create')),
	array('label'=>'Ver Visitas', 'url'=>array('view', 'id'=>$model->VIS_CORREL)),
	array('label'=>'Administrar Visitas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Visitas <?php echo $model->VIS_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

