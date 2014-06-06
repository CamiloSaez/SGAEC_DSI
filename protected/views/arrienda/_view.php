
<?php
/* @var $this ArriendaController */
/* @var $data Arrienda */
?>

<div class="span8">
   <div class="well">

	<b><?php echo CHtml::encode($data->getAttributeLabel('FECHA')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->FECHA), array('view', 'id'=>$data->FECHA)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('HOG_N_USUARIO')); ?>:</b>
	<?php echo CHtml::encode($data->HOG_N_USUARIO); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESP_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->ESP_CORREL); ?>
	<br />


  </div>
</div>

