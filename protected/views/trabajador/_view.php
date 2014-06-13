
<?php
/* @var $this TrabajadorController */
/* @var $data Trabajador */
?>

<div class="span8">
   <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TRA_RUT), array('view', 'id'=>$data->TRA_RUT)); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />
	*/ ?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_APELLIDOS); ?>
	<br />
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_TELEFONO); ?>
	<br />

	<b><?php  echo CHtml::encode($data->getAttributeLabel('TRA_FEC_CONTRATO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_FEC_CONTRATO); ?>
	<br />
	*/?>
	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_CARGO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_CARGO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('TRA_SUELDO')); ?>:</b>
	<?php echo CHtml::encode($data->TRA_SUELDO); ?>
	<br />

	*/ ?>

  </div>
</div>

