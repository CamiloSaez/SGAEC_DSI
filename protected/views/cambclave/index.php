

<div class="span12">
<h1>Cambio de clave</h1>


<p>Por favor ingrese clave actual y nueva contraseña:</p>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cambClave',
	'enableClientValidation'=>true,
	'clientOptions'=>array( 'validateOnSubmit'=>true,),
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<div class="row">
		<?php echo $form->labelEx($model,'clave_actual'); ?>
		<?php echo $form->textField($model,'clave_actual'); ?>
		<?php echo $form->error($model,'clave_actual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nueva_contraseña'); ?>
		<?php echo $form->passwordField($model,'nueva_contraseña'); ?>
		<?php echo $form->error($model,'nueva_contraseña'); ?>
		
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('CAMBIAR'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
</div>