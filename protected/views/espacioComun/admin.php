<div class="span8">

<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacios Comunes'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Espacios Comunes', 'url'=>array('index')),
	array('label'=>'Crear Espacio Común', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#espacio-comun-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Espacios Comunes</h1>

<p>
Aquí usted podrá modificar, eliminar o ver alguno de sus espacios comunes.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'espacio-comun-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ESP_CORREL',
		array(
                        'name'=>'TIP_CORREL',
                        'value'=>'$data->tIPCORREL->TIP_NOMBRE', // reemplazar acá el campo del modelo Departamento que representa el nombre.
                ),
		'ESP_DESCRIPCION',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>