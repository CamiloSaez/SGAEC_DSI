<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->USER_RUT,
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Create Users', 'url'=>array('create')),
	array('label'=>'Update Users', 'url'=>array('update', 'id'=>$model->USER_RUT)),
	array('label'=>'Delete Users', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->USER_RUT),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>View Users #<?php echo $model->USER_RUT; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'USER_RUT',
		'USER_PASS',
		'USER_ROL',
	),
)); ?>

<ul class = "nav nav-tabs nav-stacked">
<?php foreach(yii::app()->authManager->getAuthItems() as $data): ?>
<?php $enabled=Yii::app()->authManager->checkAccess($data->name, $model->USER_RUT)?>	
	<li><a href="#">
			<h4><?php echo $data->name?>
				<small>
					<?php if($data->type==1) echo "Operaciones";?>
					<?php if($data->type==2) echo "Tareas";?>
					<?php if($data->type==3) echo "Propietarios";?>
				</small>
				<?php echo CHtml::link($enabled?" Quitar Permiso ":" Dar Permiso ", array("users/assign", "id"=>$model->USER_RUT, "item"=>$data->name), array("class"=>$enabled?"btn-primary":"btn")); ?>
			</h4>
			<p>				
				<?php //echo $enabled?"<span class=\"label label-important\">ASIGNAR</span>":""; ?>
				<?php  echo $data->description?>
				<hr>
			</p>
		</a>
	</li>


<?php endforeach; ?>	
</ul>
