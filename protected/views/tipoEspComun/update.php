<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	$model->TIP_CORREL=>array('view','id'=>$model->TIP_CORREL),
	'Update',
);

$this->menu=array(
	array('label'=>'List TipoEspComun', 'url'=>array('index')),
	array('label'=>'Create TipoEspComun', 'url'=>array('create')),
	array('label'=>'View TipoEspComun', 'url'=>array('view', 'id'=>$model->TIP_CORREL)),
	array('label'=>'Manage TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Update TipoEspComun <?php echo $model->TIP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>