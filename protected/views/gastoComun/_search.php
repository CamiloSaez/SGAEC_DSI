<?php
/* @var $this GastoComunController */
/* @var $model GastoComun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'GAS_CORREL'); ?>
		<?php echo $form->textField($model,'GAS_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'HOG_CORREL'); ?>
		<?php echo $form->textField($model,'HOG_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GAS_MONTO'); ?>
		<?php echo $form->textField($model,'GAS_MONTO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'GAS_ESTADO'); ?>
		<?php echo $form->textField($model,'GAS_ESTADO',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->