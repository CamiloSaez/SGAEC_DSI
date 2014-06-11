<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

/*MODIFICAR: Cambiar texto*/
$this->breadcrumbs=array(
	'Comunidades'=>array('index'),
	$model->COM_CORREL=>array('view','id'=>$model->COM_CORREL),
	'Actualizar',
);
/*-------------------------*/
/*MODIFICAR: Cambiar menú lateral derecho*/
$this->menu=array(
	array('label'=>'Listar Comunidades', 'url'=>array('index')),
	array('label'=>'Crear Comunidad', 'url'=>array('create')),
	array('label'=>'Ver Comunidades', 'url'=>array('view', 'id'=>$model->COM_CORREL)),
	array('label'=>'Administrar Comunidad', 'url'=>array('admin')),
);
/*------------------------------------------*/
?>

<!--MODIFICAR: Cambiar texto principal y contenido de la página-->
<h1>Actualizar Comunidad <?php echo $model->COM_CORREL; ?></h1>
<!--------------------------------------------------------------->
<?php $this->renderPartial('_form', array('model'=>$model)); ?>