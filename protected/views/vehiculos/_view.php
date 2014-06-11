
<?php
/* @var $this VehiculosController */
/* @var $data Vehiculos */
?>

<div class="span8">
   <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VEH_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VEH_CORREL), array('view', 'id'=>$data->VEH_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VEH_PATENTE')); ?>:</b>
	<?php echo CHtml::encode($data->VEH_PATENTE); ?>
	<br />


  </div>
</div>

