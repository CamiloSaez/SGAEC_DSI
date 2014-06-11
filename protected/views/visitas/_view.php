
<?php
/* @var $this VisitasController */
/* @var $data Visitas */
?>

<div class="span8">
   <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('VIS_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->VIS_CORREL), array('view', 'id'=>$data->VIS_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VIS_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->VIS_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VEH_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->VEH_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->CON_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_N_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_N_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VIS_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->VIS_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('VIS_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->VIS_APELLIDOS); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('VIS_FECHA')); ?>:</b>
	<?php echo CHtml::encode($data->VIS_FECHA); ?>
	<br />

	*/ ?>

  </div>
</div>

