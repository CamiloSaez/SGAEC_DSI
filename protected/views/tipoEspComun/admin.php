<div class="span8">

<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */

$this->breadcrumbs=array(
	'Tipo Esp Comuns'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar TipoEspComun', 'url'=>array('index')),
	array('label'=>'Crear TipoEspComun', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tipo-esp-comun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar tipos de espacios comunes</h1>

<p>
Aquí usted podrá modificar, eliminar o ver alguno de sus tipos de espacios comunes. (Piscinas, Quinchos, Mesas de pool, Salas de estar, etc).
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tipo-esp-comun-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'TIP_CORREL',
		'TIP_NOMBRE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
