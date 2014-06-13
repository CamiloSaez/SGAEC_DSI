<div class="span8">

<?php
/* @var $this VisitasController */
/* @var $model Visitas */

$this->breadcrumbs=array(
	'Visitases'=>array('index'),
	'Administrar',
);

if(!yii::app()->user->checkAccess("hogar") ){
$this->menu=array(
	array('label'=>'Listar Visitas', 'url'=>array('index')),
	array('label'=>'Crear Visitas', 'url'=>array('create')),
);
}



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#visitas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Visitas</h1>

<p>
Aquí usted podrá modificar, eliminar o ver las visitas de la comunidad.
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'visitas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'VIS_RUT',
		'VEH_CORREL',
		'CON_RUT',
		array(
                        'name'=>'HOG_N_USUARIO',
                        'value'=>'$data->hOGNUSUARIO->HOG_N_HOGAR', // Poner nombre relación seguida por atributo.
                ),
		'VIS_NOMBRE',
		/*
		'VIS_APELLIDOS',
		'VIS_FECHA',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

</div>
