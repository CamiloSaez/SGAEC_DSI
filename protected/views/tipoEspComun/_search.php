<?php
/* @var $this TipoEspComunController */
/* @var $model TipoEspComun */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TIP_CORREL'); ?>
		<?php echo $form->textField($model,'TIP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TIP_NOMBRE'); ?>
		<?php echo $form->textField($model,'TIP_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->