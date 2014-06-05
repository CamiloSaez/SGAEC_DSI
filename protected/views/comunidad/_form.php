<?php
/* @var $this ComunidadController */
/* @var $model Comunidad */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'comunidad-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<!--MODIFICAR TEXTO-->
	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>
	<!--				-->
	
	<?php echo $form->errorSummary($model); ?>

	<!--MODIFICAR: Agregar este div para separar menú lateral del contenido-->
	<div class="span8">
	<!------------------->
	
	<!-- Lo siguiente se comenta debido a que el administrador siempre será quien lo ingrese.
	<div class="row">
		<?php //echo $form->labelEx($model,'ADM_RUT'); ?>
		<?php //echo $form->textField($model,'ADM_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php //echo $form->error($model,'ADM_RUT'); ?>
	</div>
	-->
	<div class="row" title="Nombre comunidad. Puede poseer números, letras y espacios">
		<?php echo $form->labelEx($model,'COM_NOMBRE'); ?>
		<?php echo $form->textField($model,'COM_NOMBRE',array('size'=>60,'maxlength'=>150)); ?>
		<?php echo $form->error($model,'COM_NOMBRE'); ?>
	</div>

	<div class="row" title="Puede poseer letras, números, # y comas. El símbolo # debe ir después de una palabra y le deben continuar números, además es único.">
		<?php echo $form->labelEx($model,'COM_DIRECCION'); ?>
		<?php echo $form->textField($model,'COM_DIRECCION',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'COM_DIRECCION'); ?>
	</div>

	<div class="row" title="Debe ser un número mayor a 2">
		<?php echo $form->labelEx($model,'COM_N_HOGARES'); ?>
		<?php echo $form->textField($model,'COM_N_HOGARES'); ?>
		<?php echo $form->error($model,'COM_N_HOGARES'); ?>
	</div>
	
	<div class="row" title="">
		<?php echo $form->labelEx($model,'COM_MTS_2'); ?>
		<?php echo $form->textField($model,'COM_MTS_2'); ?>
		<?php echo $form->error($model,'COM_MTS_2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COMU_ID'); ?>
		<?php 
		//echo $form->textField($model,'COMU_ID',array('size'=>60,'maxlength'=>100)); 
		//El siguiente muestra como relacionar 2 modelos distintos (COMUNIDAD con COMUNA)
		echo $form->dropDownList($model,'COMU_ID',CHtml::listData(Comuna::model()->findAll(array('order'=>'COMU_NOMBRE')),'COMU_ID','COMU_NOMBRE')); //Modelo,Ordenar por,Atributo a mostrar
		?>
		<?php echo $form->error($model,'COMU_ID'); ?>
	</div>

	<div class="row" title="Debe ser un teléfono. Debe seguir el formato de un número fijo con código de área">
		<?php echo $form->labelEx($model,'COM_TELEFONO'); ?>
		<?php echo $form->textField($model,'COM_TELEFONO',array('size'=>10,'maxlength'=>10));
		//$this->widget('CMaskedTextField', array('model' => $model,'attribute' => 'COM_TELEFONO','mask' => '(+99)-999-99-999','htmlOptions' => array('size' => 16)));
		?>
		
		<?php echo $form->error($model,'COM_TELEFONO'); ?>
	</div>

	<div class="row buttons">
		<?php 
		/*---Modificar nombre a crear-----*/		
		echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); 
		/*----------------------------*/
		?>
	</div>
	<!--MODIFICAR: Cerrar el div abierto en la parte superior-->
	</div>
	<!------------------->
<?php $this->endWidget(); ?>

</div><!-- form -->