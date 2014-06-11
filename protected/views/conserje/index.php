<?php
/* @var $this ConserjeController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Conserje',
);

if(yii::app()->user->checkAccess("admin"))$this->menu=array(
	array('label'=>'Crear Conserje', 'url'=>array('create')),
	array('label'=>'Administrar Conserjes', 'url'=>array('admin')),
);
?>
<div class="span8"><!-- mantiene la estructura visual con el menú lateral a la derecha y no abajo -->
<h1>Conserje</h1>

<?php 
if(yii::app()->user->checkAccess("admin")) 
{
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); 
}?>
</div>