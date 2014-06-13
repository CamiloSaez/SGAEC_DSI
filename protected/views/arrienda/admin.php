<div class="span8">

<div class="span8">

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */

$this->breadcrumbs=array(
	'Arriendas'=>array('index'),
	'Administrar',
);
if( yii::app()->user->checkAccess("hogar") ){
$this->menu=array(
	array('label'=>'Arrendar', 'url'=>array('create')),
);
}

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#arrienda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Arriendas</h1>

<p>
Aquí usted podrá modificar, eliminar o ver alguno de sus arriendos
</p>

<?php echo CHtml::link('Búsqueda avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php 
	if( yii::app()->user->checkAccess("hogar") ){
			$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'arrienda-grid',
			'dataProvider'=>$dataProvider,
			'filter'=>$model,
			'columns'=>array(
				'ESP_CORREL',
				'FECHA',
				array(
					'class'=>'CButtonColumn',
				),
			),
		));
	}else{
			$this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'arrienda-grid',
			'dataProvider'=>$dataProvider,
			'filter'=>$model,
			'columns'=>array(
				'HOG_N_USUARIO',	
				'ESP_CORREL',
				'FECHA',
			),
		));
	
	}

	 ?>

</div>

</div>
