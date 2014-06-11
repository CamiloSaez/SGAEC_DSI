
<?php
/* @var $this VisitasController */
/* @var $model Visitas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'VIS_CORREL'); ?>
		<?php echo $form->textField($model,'VIS_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VIS_RUT'); ?>
		<?php echo $form->textField($model,'VIS_RUT',array('size'=>12,'maxlength'=>12)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VEH_CORREL'); ?>
		<?php echo $form->textField($model,'VEH_CORREL'); ?>
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
		<?php echo $form->label($model,'VIS_NOMBRE'); ?>
		<?php echo $form->textField($model,'VIS_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VIS_APELLIDOS'); ?>
		<?php echo $form->textField($model,'VIS_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'VIS_FECHA'); ?>
		<?php echo $form->textField($model,'VIS_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->

