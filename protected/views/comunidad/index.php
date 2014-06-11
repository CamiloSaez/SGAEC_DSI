<?php
/* @var $this ComunidadController */
/* @var $dataProvider CActiveDataProvider */

/*MODIFICAR: Cambiar texto*/
$this->breadcrumbs=array(
	'Comunidades',
);
/*-------------------------*/

$this->menu=array(
	array('label'=>'Crear Comunidad', 'url'=>array('create'), 'htmlOptions'=>array("class"=>"well"),),
	array('label'=>'Administrar Comunidades', 'url'=>array('admin')),
);
?>
<!--MODIFICAR: agregar la siguiente linea para mantener la estructura visual con el menú lateral a la derecha y no abajo-->
<div class="span8">
<!---------------------------------------------------------------------->
<h1>Comunidades</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
<!--MODIFICAR: cerrar el div-->
</div>
<!---------------------------------------------------------------------->