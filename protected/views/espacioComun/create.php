
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar EspacioComun', 'url'=>array('index')),
	array('label'=>'Administrar EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Crear EspacioComun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

