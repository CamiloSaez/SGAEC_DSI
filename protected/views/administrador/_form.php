<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'administrador-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_RUT'); ?>
		<?php echo $form->textField($model,'ADM_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'ADM_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_NOMBRE'); ?>
		<?php echo $form->textField($model,'ADM_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ADM_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_APELLIDOS'); ?>
		<?php echo $form->textField($model,'ADM_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ADM_APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_TELEFONO'); ?>
		<?php echo $form->textField($model,'ADM_TELEFONO'); ?>
		<?php echo $form->error($model,'ADM_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_CELULAR'); ?>
		<?php echo $form->textField($model,'ADM_CELULAR'); ?>
		<?php echo $form->error($model,'ADM_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_CORREO'); ?>
		<?php echo $form->textField($model,'ADM_CORREO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'ADM_CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADM_CLAVE'); ?>
		<?php echo $form->textField($model,'ADM_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ADM_CLAVE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->