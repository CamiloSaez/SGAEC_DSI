
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comunes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Administrar Espacio Común', 'url'=>array('admin')),
);
?>

<h1>Crear Espacios Comunes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

