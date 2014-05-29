
<!--MODIFICAR: camiar view por well. la clase view no existe en el CSS-->
<div class="span8">
<!------------------->

<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */

/*MODIFICAR: Cambiar texto*/
$this->breadcrumbs=array(
	'Comunidades'=>array('index'),
	'Administrar',
);
/*---------------------------*/

/*MODIFICAR: Cambiar menú lateral derecho*/
$this->menu=array(
	array('label'=>'Listar Comunidades', 'url'=>array('index')),
	array('label'=>'Crear comunidad', 'url'=>array('create')),
);
/*---------------------------*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#comunidad-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<!--MODIFICAR: Cambiar texto principal y contenido de la página-->
<h1>Administrar Comunidades</h1>

Aquí usted podrá modificar, eliminar o ver alguna de sus comunidades
<p>
</p>

<!---------------------------------------------------------------------->
<?php 
/*MODIFICAR: Cambiar Advanced Search por Búsqueda avanzada*/

echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); 

/*--------------------------*/
?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'comunidad-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	//En el array siguiente se omite 'ADM_RUT', para evitar que se vea en el administrador de condominios (admin)
	'columns'=>array(
		'COM_CORREL',
		'COM_NOMBRE',
		'COM_DIRECCION',
		'COM_N_HOGARES',
		'COM_COMUNA',
		'COM_TELEFONO',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
<!--MODIFICAR: Cerrar los div-->
</div>
<!------------------------------------------------------------------------>
