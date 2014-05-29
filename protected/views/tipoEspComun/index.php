<div class="span8">

<?php
/* @var $this TipoEspComunController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tipo Esp Comuns',
);

$this->menu=array(
	array('label'=>'Crear TipoEspComun', 'url'=>array('create')),
	array('label'=>'Administrar TipoEspComun', 'url'=>array('admin')),
);
?>

<h1>Tipo Esp Comuns</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

</div>
