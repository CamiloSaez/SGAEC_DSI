<?php
/* @var $this EspacioComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espacio Comuns',
);

$this->menu=array(
	array('label'=>'Create EspacioComun', 'url'=>array('create')),
	array('label'=>'Manage EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Espacio Comuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
