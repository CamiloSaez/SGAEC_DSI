<?php
/* @var $this ArchivoController */
/* @var $model Archivo */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'archivo-form',
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
		<?php echo $form->labelEx($model,'ARC_PERFIL'); ?>
		<?php echo $form->textField($model,'ARC_PERFIL',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'ARC_PERFIL'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ARC_ARCHIVO'); ?>
		<?php echo CHtml::activeFileField($model,'ARC_ARCHIVO',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ARC_ARCHIVO'); ?>
	</div>
    <br />
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<!--MODIFICAR: Cerrar el div abierto en la parte superior-->
	</div>
<!------------------->	

<?php $this->endWidget(); ?>

</div><!-- form -->