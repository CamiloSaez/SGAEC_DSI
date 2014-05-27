<?php
/* @var $this TipoFaltaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Faltas',
);

$this->menu=array(
	array('label'=>'Create TipoFalta', 'url'=>array('create')),
	array('label'=>'Manage TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Tipo Faltas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
