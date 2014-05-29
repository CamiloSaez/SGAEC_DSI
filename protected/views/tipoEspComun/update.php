
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	$model->TIP_CORREL=>array('view','id'=>$model->TIP_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar TipoEspComun', 'url'=>array('index')),
	array('label'=>'Crear TipoEspComun', 'url'=>array('create')),
	array('label'=>'Ver TipoEspComun', 'url'=>array('view', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Administrar TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Actualizar TipoEspComun <?php echo $model->TIP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

