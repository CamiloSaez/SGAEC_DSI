<div class="span8">

<div class="span8">

<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Vehiculos', 'url'=>array('index')),
	array('label'=>'Crear Vehiculos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehiculos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Veh&iacute;culos</h1>

<p>
Tambi&eacute;n puede escribir un operador de comparaci&oacute;n  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de b&uacute;squeda para especificar c&oacute;mo se debe hacer la comparaci&oacute;n.
</p>

<?php echo CHtml::link('B&uacutesqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'vehiculos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		//'VEH_CORREL',
		'VEH_PATENTE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>

</div>
