
<?php
/* @var $this TrabajadorController */
/* @var $model Trabajador */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TRA_RUT'); ?>
		<?php echo $form->textField($model,'TRA_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_NOMBRE'); ?>
		<?php echo $form->textField($model,'TRA_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_APELLIDOS'); ?>
		<?php echo $form->textField($model,'TRA_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_TELEFONO'); ?>
		<?php echo $form->textField($model,'TRA_TELEFONO',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_FEC_CONTRATO'); ?>
		<?php echo $form->textField($model,'TRA_FEC_CONTRATO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_CARGO'); ?>
		<?php echo $form->textField($model,'TRA_CARGO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TRA_SUELDO'); ?>
		<?php echo $form->textField($model,'TRA_SUELDO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

