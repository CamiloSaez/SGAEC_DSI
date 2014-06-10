
<?php
/* @var $this TipoFaltaController */
/* @var $data TipoFalta */
?>

<div class="span8">
   <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TFAL_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TFAL_CORREL), array('view', 'id'=>$data->TFAL_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TFAL_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->TFAL_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TFAL_MONTO')); ?>:</b>
	<?php echo CHtml::encode($data->TFAL_MONTO); ?>
	<br />


  </div>
</div>

