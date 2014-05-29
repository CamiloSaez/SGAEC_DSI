<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'COM_CORREL'); ?>
		<?php echo $form->textField($model,'COM_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADM_RUT'); ?>
		<?php echo $form->textField($model,'ADM_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_NOMBRE'); ?>
		<?php echo $form->textField($model,'COM_NOMBRE',array('size'=>60,'maxlength'=>150)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_DIRECCION'); ?>
		<?php echo $form->textField($model,'COM_DIRECCION',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_N_HOGARES'); ?>
		<?php echo $form->textField($model,'COM_N_HOGARES'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_COMUNA'); ?>
		<?php echo $form->textField($model,'COM_COMUNA',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COM_TELEFONO'); ?>
		<?php echo $form->textField($model,'COM_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->