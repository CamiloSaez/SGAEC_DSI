<div class="span8">

<?php
/* @var $this TipoFaltaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Faltas',
);

$this->menu=array(
	array('label'=>'Crear TipoFalta', 'url'=>array('create')),
	array('label'=>'Administrar TipoFalta', 'url'=>array('admin')),
);
?>

<h1>Tipo Faltas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
