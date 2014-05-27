<?php
/* @var $this EspacioComunController */
/* @var $model EspacioComun */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'espacio-comun-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx(TipoEspComun::model(),'TIP_NOMBRE'); ?>
		<?php echo $form->dropDownList($model,'TIP_CORREL', CHtml::listData(TipoEspComun::model()->findAll(),'TIP_CORREL', 'TIP_NOMBRE')); ?>
		<?php echo $form->error($model,'TIP_CORREL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESP_DESCRIPCION'); ?>
		<?php echo $form->textField($model,'ESP_DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'ESP_DESCRIPCION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->