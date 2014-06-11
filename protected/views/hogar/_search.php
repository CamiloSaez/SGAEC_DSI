<?php
/* @var $this HogarController */
/* @var $model Hogar */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'HOG_RUT'); ?>
		<?php echo $form->textField($model,'HOG_RUT',array('size'=>12,'maxlength'=>12)); ?>
		
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_CLAVE'); ?>
		<?php echo $form->textField($model,'HOG_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_N_HOGAR'); ?>
		<?php echo $form->textField($model,'HOG_N_HOGAR'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_MCUADRADOS'); ?>
		<?php echo $form->textField($model,'HOG_MCUADRADOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_NOMBRE'); ?>
		<?php echo $form->textField($model,'HOG_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_APELLIDOS'); ?>
		<?php echo $form->textField($model,'HOG_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_TELEFONO'); ?>
		<?php echo $form->textField($model,'HOG_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_CORREO'); ?>
		<?php echo $form->textField($model,'HOG_CORREO',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_N_USUARIO'); ?>
		<?php echo $form->textField($model,'HOG_N_USUARIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->