
<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'VEH_CORREL'); ?>
		<?php echo $form->textField($model,'VEH_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VEH_PATENTE'); ?>
		<?php echo $form->textField($model,'VEH_PATENTE',array('size'=>8,'maxlength'=>8)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

