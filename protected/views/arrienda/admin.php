﻿<div class="span8">

<div class="span8">

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendas'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listarar Arrienda', 'url'=>array('index')),
	array('label'=>'Crear Arrienda', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arrienda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Arriendas</h1>

<p>
Aquí usted podrá modificar, eliminar o ver alguno de sus arriendos
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'arrienda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'HOG_N_USUARIO',
		'ESP_CORREL',
		'FECHA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>

</div>
