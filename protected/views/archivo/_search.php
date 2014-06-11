<?php
/* @var $this ArchivoController */
/* @var $model Archivo */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ARC_CORREL'); ?>
		<?php echo $form->textField($model,'ARC_CORREL'); ?>
	</div>

	<!--<div class="row">
		<?php // echo $form->label($model,'COM_CORREL'); ?>
		<?php //echo $form->textField($model,'COM_CORREL'); ?>
	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ARC_ARCHIVO'); ?>
		<?php echo $form->textField($model,'ARC_ARCHIVO',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ARC_PERFIL'); ?>
		<?php echo $form->textField($model,'ARC_PERFIL',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->