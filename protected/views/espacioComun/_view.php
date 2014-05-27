<?php
/* @var $this EspacioComunController */
/* @var $data EspacioComun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESP_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ESP_CORREL), array('view', 'id'=>$data->ESP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIP_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->TIP_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESP_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->ESP_DESCRIPCION); ?>
	<br />


</div>