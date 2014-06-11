

<?php
/* @var $this ArriendaController */
/* @var $model Arrienda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'arrienda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
   <div class="span8">
   <div class="span8">

	<div class="row">
		<?php echo $form->labelEx($model,'HOG_N_USUARIO'); ?>
		<?php echo $form->dropDownList($model,'HOG_N_USUARIO',CHtml::listData(Hogar::model()->findAll(array('order'=>'HOG_N_HOGAR')),'HOG_N_USUARIO','HOG_N_HOGAR'));?>
		<?php echo $form->error($model,'HOG_N_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESP_CORREL'); ?>
		<?php echo $form->dropDownList($model,'ESP_CORREL',CHtml::listData(EspacioComun::model()->findAll(array('order'=>'ESP_DESCRIPCION')),'ESP_CORREL','ESP_DESCRIPCION'));?>
		<?php echo $form->error($model,'ESP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FECHA'); ?>
		<?php echo $form->textField($model,'FECHA',array('class'=>'datetimepicker2')); ?>
		<?php echo $form->error($model,'FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

    </div>
    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->


