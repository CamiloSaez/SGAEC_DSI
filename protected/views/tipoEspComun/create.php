
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo de espacio común'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar tipo', 'url'=>array('index')),
	array('label'=>'Administrar tipo', 'url'=>array('admin')),
);
?>

<h1>Crear tipo de espacio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

