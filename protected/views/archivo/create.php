<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Archivos', 'url'=>array('index')),
	array('label'=>'Administrar Archivos', 'url'=>array('admin')),
);
?>

<h1>Crear Archivo</h1>
<?php echo CHtml::beginForm('','post',array("name"=>"form","id"=>"form","enctype"=>"multipart/form-data"));?>
<?php   $this->renderPartial('_form', array('model'=>$model)); ?>
<?php echo CHtml::endForm();?>