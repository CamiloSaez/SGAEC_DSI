<div class="span8">

<div class="span8">

<?php
/* @var $this ArriendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arriendos',
);

$this->menu=array(
	array('label'=>'Crear Arriendo', 'url'=>array('create')),
	array('label'=>'Administrar Arriendo', 'url'=>array('admin')),
);
?>

<h1>Arriendos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>

</div>
