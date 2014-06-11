<?php
/* @var $this ENCUESTAController */
/* @var $model ENCUESTA */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'encuesta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL'); ?>
		<?php echo $form->error($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ENC_PREGUNTA'); ?>
		<?php echo $form->textField($model,'ENC_PREGUNTA',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ENC_PREGUNTA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->