<?php
/* @var $this ENCUESTAController */
/* @var $data ENCUESTA */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENC_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ENC_CORREL), array('view', 'id'=>$data->ENC_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->COM_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ENC_PREGUNTA')); ?>:</b>
	<?php echo CHtml::encode($data->ENC_PREGUNTA); ?>
	<br />


</div>