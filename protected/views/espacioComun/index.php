<div class="span8">

<?php
/* @var $this EspacioComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Espacio Comuns',
);

$this->menu=array(
	array('label'=>'Crear EspacioComun', 'url'=>array('create')),
	array('label'=>'Administrar EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Espacio Comuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
