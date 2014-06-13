
<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tipo-falta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
   <div class="span8">

	<div class="row">
		<?php echo $form->labelEx($model,'TFAL_NOMBRE'); ?>
		<?php echo $form->textField($model,'TFAL_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TFAL_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TFAL_MONTO'); ?>
		<?php echo $form->textField($model,'TFAL_MONTO', array('onkeypress' =>'return solonum(event)')); ?>
		<?php echo $form->error($model,'TFAL_MONTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrar' : 'Guardar'); ?>
	</div>

    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

