<div class="span8">

<?php
/* @var $this HogarController */
/* @var $model Hogar */



$this->breadcrumbs=array(
	'Hogares'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Hogar', 'url'=>array('index')),
	array('label'=>'Crear Hogar', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#hogar-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Hogares</h1>

<p>
También puede escribir un operador de comparación  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de búsqueda para especificar cómo se debe hacer la comparación.
</p>

<?php echo CHtml::link('Búsqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'hogar-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'HOG_RUT',
		'COM_CORREL',
		'HOG_N_HOGAR',
		'HOG_N_USUARIO',
		/*'HOG_MCUADRADOS',
		'HOG_NOMBRE',
		'HOG_CLAVE',
		'HOG_APELLIDOS',
		'HOG_TELEFONO',
		'HOG_CORREO',
		'',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
