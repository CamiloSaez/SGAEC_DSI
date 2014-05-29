
<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */

$this->breadcrumbs=array(
	'Espacio Comuns'=>array('index'),
	$model->ESP_CORREL=>array('view','id'=>$model->ESP_CORREL),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar EspacioComun', 'url'=>array('index')),
	array('label'=>'Crear EspacioComun', 'url'=>array('create')),
	array('label'=>'Ver EspacioComun', 'url'=>array('view', 'id'=>$model->ESP_CORREL)),
	array('label'=>'Administrar EspacioComun', 'url'=>array('admin')),
);
?>

<h1>Actualizar EspacioComun <?php echo $model->ESP_CORREL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

