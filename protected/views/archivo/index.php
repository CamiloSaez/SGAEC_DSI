<?php
/* @var $this ArchivoController */
/* @var $dataProvider CActiveDataProvider */
/* @var $data Archivo */

$this->breadcrumbs=array(
	'Archivos',
);

if(yii::app()->user->checkAccess("admin")) $this->menu=array(
	array('label'=>'Crear Archivo', 'url'=>array('create')),
	array('label'=>'Administrar Archivo', 'url'=>array('admin')),
);
?>

<div class="span8"><!-- mantiene la estructura visual con el menú lateral a la derecha y no abajo -->
<h1>Archivos</h1>
<?php 
if(Yii::app()->user->hasFlash('mensaje'))
{
    ?>
    <h6 style="color: green;"><?php echo Yii::app()->user->getFlash('mensaje')?></h6>
    <?php    
} ?>

<?php 
if(yii::app()->user->checkAccess("admin")) 
{
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',));
} ?>

</div>