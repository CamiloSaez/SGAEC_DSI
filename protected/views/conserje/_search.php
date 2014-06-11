<?php
/* @var $this ConserjeController */
/* @var $model Conserje */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CON_RUT'); ?>
		<?php echo $form->textField($model,'CON_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<!-- <div class="row">
		<?php // echo $form->label($model,'COM_CORREL'); ?>
		<?php // echo $form->textField($model,'COM_CORREL'); ?>
	</div> -->

	<div class="row">
		<?php echo $form->label($model,'CON_CLAVE'); ?>
		<?php echo $form->textField($model,'CON_CLAVE',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_NOMBRE'); ?>
		<?php echo $form->textField($model,'CON_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_APELLIDOS'); ?>
		<?php echo $form->textField($model,'CON_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_TELEFONO'); ?>
		<?php echo $form->textField($model,'CON_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_CORREO'); ?>
		<?php echo $form->textField($model,'CON_CORREO',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->