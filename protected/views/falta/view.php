<?php
/* @var $this FaltaController */
/* @var $model Falta */

$this->breadcrumbs=array(
	'Faltas'=>array('index'),
	$model->FAL_CORREL,
);

$this->menu=array(
	array('label'=>'Listar Faltas', 'url'=>array('index')),
	array('label'=>'Ingresar Falta', 'url'=>array('create')),
	array('label'=>'Actualizar Falta', 'url'=>array('update', 'id'=>$model->FAL_CORREL)),
	array('label'=>'Eliminar Falta', 'url'=> array('delete','id'=>$model->FAL_CORREL),'confirm'=>'¿Esta usted seguro de eliminar este item?'),
	array('label'=>'Administrar Faltas', 'url'=>array('admin')),
);
?>
<div class="span8" >
<h2>Falta.</h2>
	<strong>Tipo:<br>
			<?php  
			$correl= $model->FAL_CORREL;
			echo $correl;
			$falta = TipoFalta::model()->find("TFAL_CORREL = '$correl'");
			echo $falta;//->TFAL_NOMBRE;
			?>
	</strong>
	<hr>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(				
		'CON_RUT',
		'HOG_N_USUARIO',
		'FAL_DESCRIPCION',
		'FAL_FECHA',
	),
)); ?>
</div>