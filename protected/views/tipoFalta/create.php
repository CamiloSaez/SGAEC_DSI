
<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoFalta', 'url'=>array('index')),
	array('label'=>'Administrar TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Crear TipoFalta</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

