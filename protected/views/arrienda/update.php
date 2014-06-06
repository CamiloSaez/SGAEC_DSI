
<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendas'=>array('index'),
	$model->FECHA=>array('view','id'=>$model->FECHA),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Listar Arrienda', 'url'=>array('index')),
	array('label'=>'Crear Arrienda', 'url'=>array('create')),
	array('label'=>'Ver Arrienda', 'url'=>array('view', 'id'=>$model->FECHA)),
	array('label'=>'Administrar Arrienda', 'url'=>array('admin')),
);
?>

<h1>Actualizar Arrienda <?php echo $model->FECHA; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

