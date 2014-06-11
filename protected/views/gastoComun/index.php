<?php
/* @var $this GastoComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gasto Comuns',
);

$this->menu=array(
	array('label'=>'Create GastoComun', 'url'=>array('create')),
	array('label'=>'Manage GastoComun', 'url'=>array('admin')),
);
?>

<h1>Gasto Comuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
