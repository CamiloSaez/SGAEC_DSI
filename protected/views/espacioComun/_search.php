<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ESP_CORREL'); ?>
		<?php echo $form->textField($model,'ESP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIP_CORREL'); ?>
		<?php echo $form->textField($model,'TIP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ESP_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'ESP_DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->