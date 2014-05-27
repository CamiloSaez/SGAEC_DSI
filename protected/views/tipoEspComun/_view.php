<?php
/* @var $this TipoEspComunController */
/* @var $data TipoEspComun */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIP_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TIP_CORREL), array('view', 'id'=>$data->TIP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIP_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TIP_NOMBRE); ?>
	<br />


</div>