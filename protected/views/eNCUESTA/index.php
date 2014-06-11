<?php
/* @var $this ENCUESTAController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Encuestas',
);

$this->menu=array(
	array('label'=>'Create ENCUESTA', 'url'=>array('create')),
	array('label'=>'Manage ENCUESTA', 'url'=>array('admin')),
);
?>

<h1>Encuestas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
