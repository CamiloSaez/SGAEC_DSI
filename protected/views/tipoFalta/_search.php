
<?php
/* @var $this TipoFaltaController */
/* @var $model TipoFalta */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TFAL_CORREL'); ?>
		<?php echo $form->textField($model,'TFAL_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TFAL_NOMBRE'); ?>
		<?php echo $form->textField($model,'TFAL_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TFAL_MONTO'); ?>
		<?php echo $form->textField($model,'TFAL_MONTO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

