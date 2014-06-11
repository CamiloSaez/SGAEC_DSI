<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

/*MODIFICAR: Cambiar texto*/
$this->breadcrumbs=array(
	'Comunidades'=>array('index'),
	'Crear',
);
/*-------------------------*/
/*MODIFICAR: Cambiar menú lateral derecho*/
$this->menu=array(
	array('label'=>'Listar Comunidades', 'url'=>array('index')),
	array('label'=>'Administrar Comunidades', 'url'=>array('admin')),
);
/*------------------------------------------*/
?>

<!--MODIFICAR: Cambiar texto principal y contenido de la página-->
<h1>Crear Comunidad</h1>
<!--------------------------------------------------------------->
<?php $this->renderPartial('_form', array('model'=>$model)); ?>