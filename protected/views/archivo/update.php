<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	$model->ARC_CORREL=>array('view','id'=>$model->ARC_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'Listar Archivo', 'url'=>array('index')),
	array('label'=>'Crear Archivo', 'url'=>array('create')),
	array('label'=>'Ver Archivo', 'url'=>array('view', 'id'=>$model->ARC_CORREL)),
	array('label'=>'Administrar Archivo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Archivo <?php echo $model->ARC_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>