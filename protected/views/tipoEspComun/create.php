<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TipoEspComun', 'url'=>array('index')),
	array('label'=>'Manage TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Create TipoEspComun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>