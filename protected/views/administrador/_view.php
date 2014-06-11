<?php
/* @var $this AdministradorController */
/* @var $data Administrador */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ADM_CORREL), array('view', 'id'=>$data->ADM_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_APELLIDOS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_CELULAR')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_CELULAR); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_CORREO); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('ADM_CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->ADM_CLAVE); ?>
	<br />

	*/ ?>

</div>