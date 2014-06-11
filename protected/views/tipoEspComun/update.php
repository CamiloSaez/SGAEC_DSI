
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo de espacio común'=>array('index'),
	$model->TIP_CORREL=>array('view','id'=>$model->TIP_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar tipo', 'url'=>array('index')),
	array('label'=>'Crear tipo', 'url'=>array('create')),
	array('label'=>'Ver tipo', 'url'=>array('view', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Administrar tipo', 'url'=>array('admin')),
);
?>

<h1>Actualizar Tipo de espacio común <?php echo $model->TIP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

