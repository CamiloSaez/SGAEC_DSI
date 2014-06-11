<?php
/* @var $this HogarController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Hogares',
);

$this->menu=array(
	array('label'=>'Crear Hogar', 'url'=>array('create')),
	array('label'=>'Administrar Hogar', 'url'=>array('admin')),
);
?>
<div class="span8"><!-- mantiene la estructura visual con el menú lateral a la derecha y no abajo -->
<h1>Hogares</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
</div>