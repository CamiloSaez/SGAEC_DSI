
<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'falta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Tipo de falta'); ?>
		<?php echo $form->dropDownList($model,'TFAL_CORREL',CHtml::listData(TipoFalta::model()->findAll(),'TFAL_CORREL','TFAL_NOMBRE')); 	?>		
		<?php echo $form->error($model,'TFAL_CORREL'); ?>

	</div>		


<?php /*

	<div class="row">
		<?php echo $form->labelEx($model,'CON_RUT'); ?>
		<?php echo $form->textField($model,'CON_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'CON_RUT'); ?>
	</div>

*/?>	

	<div class="row">
		<?php echo $form->labelEx($model,'Numero de hogar'); ?>
		<?php echo $form->dropDownList($model,'HOG_N_USUARIO',CHtml::listData(Hogar::model()->findAll(array('order'=>'HOG_N_HOGAR')),'HOG_N_USUARIO','HOG_N_HOGAR')); 	?>
		<?php // echo $form->textField($model,'HOG_N_USUARIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'HOG_N_USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Descripcion de la falta'); ?>
		<?php echo $form->textField($model,'FAL_DESCRIPCION',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'FAL_DESCRIPCION'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Fecha en que fue realizada'); ?>


		<?php echo $this->renderPartial('application.views.calendario.fecha', array('model'=>$model,'name'=>'FAL_FECHA')); /*  ?>        	
	       <input type="text" name="datepicker" id="datepicker" readonly="readonly" size="12" />
           </form>
		<?php echo $form->textField($model,'FAL_FECHA');   */        ?>


		<?php echo $form->error($model,'FAL_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->


