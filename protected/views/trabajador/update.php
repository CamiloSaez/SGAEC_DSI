
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */

$this->breadcrumbs=array(
	'Trabajador'=>array('index'),
	$model->TRA_RUT=>array('view','id'=>$model->TRA_RUT),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Trabajador', 'url'=>array('index')),
	array('label'=>'Crear Trabajador', 'url'=>array('create')),
	array('label'=>'Ver Trabajador', 'url'=>array('view', 'id'=>$model->TRA_RUT)),
	array('label'=>'Administrar Trabajador', 'url'=>array('admin')),
);
?>

<h1>Actualizar Trabajador <?php echo $model->TRA_RUT; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

