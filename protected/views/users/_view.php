<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_RUT')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->USER_RUT), array('view', 'id'=>$data->USER_RUT)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_PASS')); ?>:</b>
	<?php echo CHtml::encode($data->USER_PASS); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('USER_ROL')); ?>:</b>
	<?php echo CHtml::encode($data->USER_ROL); ?>
	<br />


</div>