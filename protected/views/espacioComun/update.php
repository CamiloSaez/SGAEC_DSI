
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	$model->ESP_CORREL=>array('view','id'=>$model->ESP_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
	array('label'=>'Ver Espacio Común', 'url'=>array('view', 'id'=>$model->ESP_CORREL)),
	array('label'=>'Administrar Espacio Común', 'url'=>array('admin')),
);
?>

<h1>Actualizar Espacios Comunes <?php echo $model->ESP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

