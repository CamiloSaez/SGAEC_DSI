<?php
/* @var $this ConserjeController */
/* @var $data Conserje */
?>

<div class="span8">
<div class="well">

<?php if($data->COM_CORREL == yii::app()->user->comunidad){?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CON_RUT), array('view', 'id'=>$data->CON_RUT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->CON_CLAVE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->CON_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->CON_APELLIDOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->CON_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CON_CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->CON_CORREO); ?>
	<br />

<?php }?>
</div>
</div>