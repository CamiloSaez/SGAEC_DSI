<?php
/* @var $this HogarController */
/* @var $model Hogar */
/* @var $form CActiveForm */
?>

<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.Rut.js" type="text/javascript"></script>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'hogar-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son obligatorios.</p>

	<?php echo $form->errorSummary($model); ?>


	<!--MODIFICAR: Agregar este div para separar menú lateral del contenido-->
	<div class="span8">
	<!-------------------->

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_RUT'); ?>
		<?php echo $form->textField($model,'HOG_RUT',array('id'=>'rut_demo_5','size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'HOG_RUT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_CLAVE'); ?>
		<?php echo $form->textField($model,'HOG_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'HOG_CLAVE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_N_HOGAR'); ?>
		<?php echo $form->textField($model,'HOG_N_HOGAR', array('onkeypress' =>'return solonum(event)')); ?>
		<?php echo $form->error($model,'HOG_N_HOGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_MCUADRADOS'); ?>
		<?php echo $form->textField($model,'HOG_MCUADRADOS',array('onkeypress' =>'return solonum(event)')); ?>
		<?php echo $form->error($model,'HOG_MCUADRADOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_NOMBRE'); ?>
		<?php echo $form->textField($model,'HOG_NOMBRE',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HOG_NOMBRE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_APELLIDOS'); ?>
		<?php echo $form->textField($model,'HOG_APELLIDOS',array('onkeypress'=>'return soloLetras(event)','size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HOG_APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_TELEFONO'); ?>
		<?php echo $form->textField($model,'HOG_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'HOG_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_CORREO'); ?>
		<?php echo $form->textField($model,'HOG_CORREO',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'HOG_CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_N_USUARIO'); ?>
		<?php echo $form->textField($model,'HOG_N_USUARIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HOG_N_USUARIO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>
<!--MODIFICAR: Cerrar el div abierto en la parte superior-->
	</div>
	<!------------------->
<?php $this->endWidget(); ?>


</div><!-- form -->