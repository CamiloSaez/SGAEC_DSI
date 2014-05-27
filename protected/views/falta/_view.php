<?php
/* @var $this FaltaController */
/* @var $data Falta */
?>

<div class="span6" style="border: 2px solid; border-radius: 25px; margin: 10px;">

<div class="view" style="margin: 12px ;">


	<b><?php echo CHtml::encode($data->getAttributeLabel('Falta Nª')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FAL_CORREL), array('view', 'id'=>$data->FAL_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Tipo de falta')); ?>:</b>
	<?php echo CHtml::encode($data->TFAL_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('RUT del conserje que registro')); ?>:</b>
	<?php echo CHtml::encode($data->CON_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Username del propietario')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_N_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Descripcion de la falta')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_DESCRIPCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de registro')); ?>:</b>
	<?php echo CHtml::encode($data->FAL_FECHA); ?>
	<br />
	

</div>

</div>