<?php
/* @var $this ConserjeController */
/* @var $model Conserje */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'conserje-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>

<div class="span8">

	<div class="row">
		<?php echo $form->labelEx($model,'CON_RUT'); ?>
		<?php echo $form->textField($model,'CON_RUT',array('id'=>'rut_demo_5','size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'CON_RUT'); ?>
	</div>

	<!-- <div class="row">
		<?php //echo $form->labelEx($model,'COM_CORREL'); ?>
		<?php //echo $form->dropDownList($model,'COM_CORREL', CHtml::listData(Comunidad::model()->findAll(),'COM_CORREL', 'COM_NOMBRE'));?>
		<?php //echo $form->error($model,'COM_CORREL'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->labelEx($model,'CON_CLAVE'); ?>
		<?php echo $form->textField($model,'CON_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'CON_CLAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_NOMBRE'); ?>
		<?php echo $form->textField($model,'CON_NOMBRE',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CON_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_APELLIDOS'); ?>
		<?php echo $form->textField($model,'CON_APELLIDOS',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CON_APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_TELEFONO'); ?>
		<?php echo $form->textField($model,'CON_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'CON_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CON_CORREO'); ?>
		<?php echo $form->textField($model,'CON_CORREO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'CON_CORREO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<!--MODIFICAR: Cerrar el div abierto en la parte superior-->
	</div>
<!------------------->

<?php $this->endWidget(); ?>

</div><!-- form -->