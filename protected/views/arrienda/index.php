<div class="span8">

<?php
/* @var $this ArriendaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Arriendas',
);

$this->menu=array(
	array('label'=>'Crear Arrienda', 'url'=>array('create')),
	array('label'=>'Administrar Arrienda', 'url'=>array('admin')),
);
?>

<h1>Arriendas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
