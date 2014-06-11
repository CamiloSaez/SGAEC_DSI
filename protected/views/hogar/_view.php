<?php
/* @var $this HogarController */
/* @var $data Hogar */
?>
<div class="span8">
<!----------------------------->
<div class="well">
<!-------------------->
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_N_USUARIO')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->HOG_N_USUARIO), array('view', 'id'=>$data->HOG_N_USUARIO)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_RUT')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_RUT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_CLAVE')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_CLAVE); ?>
	<br />
	*/?>

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_N_HOGAR')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_N_HOGAR); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_MCUADRADOS')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_MCUADRADOS); ?>
	<br />
	*/?>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_APELLIDOS')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_APELLIDOS); ?>
	<br />
	*/?>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_TELEFONO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_CORREO')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_CORREO); ?>
	<br />

	*/ ?>


<!-------------------------------->
</div>
<!------------------------------------------------------------------------>
</div>