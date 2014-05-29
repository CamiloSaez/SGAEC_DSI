<div class="span8">


<div class="span8">
<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	'Administrar Faltas',
);

$this->menu=array(
	array('label'=>'Listarar Faltas', 'url'=>array('index')),
	array('label'=>'Ingresar Falta', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#falta-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Faltas</h1>

<p>
Aquí usted podrá modificar, eliminar o ver faltas emitidas en su comunidad.
</p>


<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'falta-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'FAL_CORREL',
//		'TFAL_CORREL',
		'CON_RUT',
		'HOG_N_USUARIO',
		'FAL_DESCRIPCION',
		'FAL_FECHA',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>

</div>
