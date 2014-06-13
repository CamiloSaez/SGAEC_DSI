
<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */

$this->breadcrumbs=array(
	'Tipo Faltas'=>array('index'),
	$model->TFAL_CORREL,
);

$this->menu=array(
	array('label'=>'Listar TipoFalta', 'url'=>array('index')),
	array('label'=>'Crear TipoFalta', 'url'=>array('create')),
	array('label'=>'Actualizar TipoFalta', 'url'=>array('update', 'id'=>$model->TFAL_CORREL)),
	array('label'=>'Eliminar TipoFalta', 'url'=>array('delete','id'=>$model->TFAL_CORREL)),
	array('label'=>'Administrar TipoFalta', 'url'=>array('admin')),
);
?>
 <div class="span6">
<h1>TipoFalta <?php //echo $model->TFAL_CORREL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		
		'TFAL_NOMBRE',
		'TFAL_MONTO',
	),
)); ?>
</div>

