<?php
/* @var $this ENCUESTAController */
/* @var $model ENCUESTA */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ENC_CORREL'); ?>
		<?php echo $form->textField($model,'ENC_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ENC_PREGUNTA'); ?>
		<?php echo $form->textField($model,'ENC_PREGUNTA',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->