<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_RUT'); ?>
		<?php echo $form->textField($model,'USER_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'USER_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_PASS'); ?>
		<?php echo $form->textField($model,'USER_PASS',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'USER_PASS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USER_ROL'); ?>
		<?php echo $form->textField($model,'USER_ROL'); ?>
		<?php echo $form->error($model,'USER_ROL'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->