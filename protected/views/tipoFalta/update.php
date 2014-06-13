
<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),	
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoFalta', 'url'=>array('index')),
	array('label'=>'Crear TipoFalta', 'url'=>array('create')),
	array('label'=>'Ver TipoFalta', 'url'=>array('view', 'id'=>$model->TFAL_CORREL)),
	array('label'=>'Administrar TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Actualizar TipoFalta </h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

