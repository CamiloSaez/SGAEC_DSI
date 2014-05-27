<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'FAL_CORREL'); ?>
		<?php echo $form->textField($model,'FAL_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TFAL_CORREL'); ?>
		<?php echo $form->textField($model,'TFAL_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CON_RUT'); ?>
		<?php echo $form->textField($model,'CON_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_N_USUARIO'); ?>
		<?php echo $form->textField($model,'HOG_N_USUARIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'FAL_DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FAL_FECHA'); ?>
		<?php echo $form->textField($model,'FAL_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('BUSCAR'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->