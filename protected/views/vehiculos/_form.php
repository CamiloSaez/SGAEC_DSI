
<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
   <div class="span8">

	<div class="row">
		<?php echo $form->labelEx($model,'VEH_PATENTE'); ?>
		<?php echo $form->textField($model,'VEH_PATENTE',array('size'=>8,'maxlength'=>8)); ?>
		<?php echo $form->error($model,'VEH_PATENTE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

