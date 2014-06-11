<?php
/* @var $this ConserjeController */
/* @var $model Conserje */

$this->breadcrumbs=array(
	'Conserje'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Listar Conserjes', 'url'=>array('index')),
	array('label'=>'Crear Conserje', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#conserje-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Conserje</h1>

<p>
Tambi&eacute;n puede escribir un operador de comparaci&oacute;n  (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) al principio de cada uno de los valores de b&uacute;squeda para especificar c&oacute;mo se debe hacer la comparaci&oacute;n.
</p>

<?php echo CHtml::link('B&uacute;squeda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'conserje-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'CON_RUT',
		'COM_CORREL',
		'CON_CLAVE',
		'CON_NOMBRE',
		'CON_APELLIDOS',
		'CON_TELEFONO',
		/*
		'CON_CORREO',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
