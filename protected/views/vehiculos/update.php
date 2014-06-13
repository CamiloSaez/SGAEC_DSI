
<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	$model->VEH_CORREL=>array('view','id'=>$model->VEH_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Vehículos', 'url'=>array('index')),
	array('label'=>'Crear Vehículos', 'url'=>array('create')),
	array('label'=>'Ver Vehículos', 'url'=>array('view', 'id'=>$model->VEH_CORREL)),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),
);
?>

<h1>Actualizar Vehículos <?php echo $model->VEH_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

