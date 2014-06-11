<?php
/* @var $this GastoComunController */
/* @var $data GastoComun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->GAS_CORREL), array('view', 'id'=>$data->GAS_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->GAS_MONTO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('GAS_ESTADO')); ?>:</b>
	<?php echo CHtml::encode($data->GAS_ESTADO); ?>
	<br />


</div>