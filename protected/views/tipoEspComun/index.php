<?php
/* @var $this TipoEspComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Esp Comuns',
);

$this->menu=array(
	array('label'=>'Create TipoEspComun', 'url'=>array('create')),
	array('label'=>'Manage TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Tipo Esp Comuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
