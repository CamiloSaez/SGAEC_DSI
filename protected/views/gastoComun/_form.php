<?php
/* @var $this GastoComunController */
/* @var $model GastoComun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'gasto-comun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_CORREL'); ?>
		<?php echo $form->textField($model,'HOG_CORREL'); ?>
		<?php echo $form->error($model,'HOG_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GAS_MONTO'); ?>
		<?php echo $form->textField($model,'GAS_MONTO'); ?>
		<?php echo $form->error($model,'GAS_MONTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'GAS_ESTADO'); ?>
		<?php echo $form->textField($model,'GAS_ESTADO',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'GAS_ESTADO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->