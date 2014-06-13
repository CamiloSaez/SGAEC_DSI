
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'trabajador-form',
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
		<?php echo $form->labelEx($model,'TRA_RUT'); ?>
		<?php echo $form->textField($model,'TRA_RUT',array('id'=>'rut_demo_5','size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'TRA_RUT'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'COM_CORREL'); ?>
		<?php //echo $form->textField($model,'COM_CORREL');?>
		<?php //s¿echo $form->error($model,'COM_CORREL'); ?>
	</div>
	

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_NOMBRE'); ?>
		<?php echo $form->textField($model,'TRA_NOMBRE',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TRA_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_APELLIDOS'); ?>
		<?php echo $form->textField($model,'TRA_APELLIDOS',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TRA_APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_TELEFONO'); ?>
		<?php echo $form->textField($model,'TRA_TELEFONO',array('onkeypress' =>'return solonum(event)')); ?>
		<?php echo $form->error($model,'TRA_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_FEC_CONTRATO'); ?>
		<?php echo $form->textField($model,'TRA_FEC_CONTRATO', array('class'=>'datetimepicker')); ?>
		<?php echo $form->error($model,'TRA_FEC_CONTRATO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_CARGO'); ?>
		<?php echo $form->textField($model,'TRA_CARGO',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'TRA_CARGO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TRA_SUELDO'); ?>
		<?php echo $form->textField($model,'TRA_SUELDO', array('onkeypress' =>'return solonum(event)')); ?>
		<?php echo $form->error($model,'TRA_SUELDO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

