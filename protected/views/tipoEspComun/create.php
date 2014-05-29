
<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Listar TipoEspComun', 'url'=>array('index')),
	array('label'=>'Administrar TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Crear TipoEspComun</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

