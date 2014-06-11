<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */


/*MODIFICAR: Cambiar texto*/
$this->breadcrumbs=array(
	'Comunidads'=>array('index'),
	$model->COM_CORREL,
);
/*-------------------------*/
/*MODIFICAR: Cambiar menú lateral derecho*/
$this->menu=array(
	array('label'=>'Listar Comunidades', 'url'=>array('index')),
	array('label'=>'Crear Comunidad', 'url'=>array('create')),
	array('label'=>'Actualizar Comunidad', 'url'=>array('update', 'id'=>$model->COM_CORREL)),
	array('label'=>'Eliminar Comunidad', 'url'=>array('delete','id'=>$model->COM_CORREL),'confirm'=>'¿Estas seguro(a) que deseas eliminar esta comunidad?'),
	array('label'=>'Administrar Comunidades', 'url'=>array('admin')),
);
/*------------------------------------------*/
?>

<!--MODIFICAR: Cambiar texto principal y contenido de la página-->
<h1>Examinar Comunidad #<?php echo $model->COM_CORREL; ?></h1>

<!--------------------------------------------------------------->
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COM_CORREL',
		'ADM_RUT',
		'COM_NOMBRE',
		'COM_DIRECCION',
		'COM_N_HOGARES',
		'COMU_ID',
		'COM_TELEFONO',
		'COM_MTS_2'
	),
	
)); ?>

<?php 
//Botón vista in active
//echo CHtml::ajaxSubmitButton('En activo',array('menu/ajaxupdate','act'=>'doInactive'), array('success'=>'reloadGrid')); 
?>