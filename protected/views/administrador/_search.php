<?php
/* @var $this AdministradorController */
/* @var $model Administrador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ADM_CORREL'); ?>
		<?php echo $form->textField($model,'ADM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_RUT'); ?>
		<?php echo $form->textField($model,'ADM_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_NOMBRE'); ?>
		<?php echo $form->textField($model,'ADM_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_APELLIDOS'); ?>
		<?php echo $form->textField($model,'ADM_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_TELEFONO'); ?>
		<?php echo $form->textField($model,'ADM_TELEFONO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_CELULAR'); ?>
		<?php echo $form->textField($model,'ADM_CELULAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_CORREO'); ?>
		<?php echo $form->textField($model,'ADM_CORREO',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_CLAVE'); ?>
		<?php echo $form->textField($model,'ADM_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->