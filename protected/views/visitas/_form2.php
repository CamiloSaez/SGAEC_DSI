
<?php
/* @var $this VisitasController */
/* @var $model Visitas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitas-form',
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
		<?php echo $form->labelEx($model,'VIS_RUT'); ?>
		<?php echo $form->textField($model,'VIS_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'VIS_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VEH_CORREL'); ?>
		<?php echo $form->textField($model,'VEH_CORREL'); ?>
		<?php echo $form->error($model,'VEH_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_RUT'); ?>
		<?php echo $form->textField($model,'CON_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'CON_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_N_USUARIO'); ?>
		<?php echo $form->textField($model,'HOG_N_USUARIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HOG_N_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VIS_NOMBRE'); ?>
		<?php echo $form->textField($model,'VIS_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'VIS_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VIS_APELLIDOS'); ?>
		<?php echo $form->textField($model,'VIS_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'VIS_APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'VIS_FECHA'); ?>
		<?php echo $form->textField($model,'VIS_FECHA',array('class'=>'datetimepicker')); ?>
		<?php echo $form->error($model,'VIS_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

