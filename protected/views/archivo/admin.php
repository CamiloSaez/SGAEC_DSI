<div class="span8">


<div class="span8">
<?php
/* @var $this ArchivoController */
/* @var $model Archivo */

$this->breadcrumbs=array(
	'Archivos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Archivos', 'url'=>array('index')),
	array('label'=>'Crear Archivo', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
/*$('.search-form form').submit(function(){
	$('#archivo-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});*/
");
?>

<h1>Administrar Archivo</h1>

<p>
Tambi&eacute;n puede escribir un operador de comparaci&oacute;n  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de b&uacute;squeda para especificar c&oacute;mo se debe hacer la comparaci&oacute;n.
</p>

<?php /* echo CHtml::link('B&uacute;squeda Avanzada','#',array('class'=>'search-button'));*/ ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array('model'=>$model,)); ?>
</div><!-- search-form -->

<?php  $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'archivo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	 'columns'=>array(
		'ARC_CORREL',
		//'COM_CORREL',
		'ARC_ARCHIVO',
		'ARC_PERFIL',
		array
(
    'class'=>'CButtonColumn',
    'template'=>'{view}{delete}',
),
	),
)); ?>
</div>
</div>