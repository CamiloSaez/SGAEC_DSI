<div class="span8">

<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Veh�culos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Veh�culos', 'url'=>array('index')),
	array('label'=>'Crear Veh�culos', 'url'=>array('create')),
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

<h1>Administrar Veh�culos</h1>

<p>
Tambi�n puede escribir un operador de comparaci�n  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de b�squeda para especificar c�mo se debe hacer la comparaci�n.
</p>

<?php echo CHtml::link('B�squeda avanzada','#',array('class'=>'search-button')); ?>
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
		'VEH_CORREL',
		'VEH_PATENTE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
