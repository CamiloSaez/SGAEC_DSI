<div class="span8">

<?php
/* @var $this TipoEspComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo de espacio común',
);

$this->menu=array(
	array('label'=>'Crear tipo', 'url'=>array('create')),
	array('label'=>'Administrar tipo', 'url'=>array('admin')),
);
?>

<h1>Tipos de espacios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
