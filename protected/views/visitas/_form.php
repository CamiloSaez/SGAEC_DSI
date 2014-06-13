
<?php
/* @var $this VisitasController */
/* @var $model Visitas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'visitas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>
   <div class="span8">

	<div class="row" title="Rut visita">
		<!-- Rut de la visita. Ingresa el conserje-->
		<?php echo $form->labelEx($model,'VIS_RUT'); ?>
		<?php echo $form->textField($model,'VIS_RUT',array('id'=>'rut_demo_5','size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'VIS_RUT'); ?>
	</div>

	<div class="row" title="Patente del vehículo de la visita">
		<!--Consulta a otra tabla-->
		<?php echo $form->labelEx($model,'VEH_CORREL'); ?>
		<?php 
		echo $form->dropDownList($model,'VEH_CORREL',CHtml::listData(Vehiculos::model()->findAll(array('order'=>'VEH_PATENTE')),'VEH_CORREL','VEH_PATENTE'),array('empty' => '')); //Modelo,Ordenar por,Atributo a mostrar

		//echo $form->textField($model,'VEH_CORREL');
		?>
		
		<?php echo $form->error($model,'VEH_CORREL'); ?>
	</div>

	<!--Rut del conserje transparente para el ingreso de la visita
	<div class="row">
		<?php //echo $form->labelEx($model,'CON_RUT'); ?>
		<?php //echo $form->textField($model,'CON_RUT',array('size'=>12,'maxlength'=>12)); ?>
		<?php //echo $form->error($model,'CON_RUT'); ?>
		
	</div>
	-->
	<div class="row" title="Hogar al que se dirige">
		<!-- Mostrar número de hogar de la comunidad-->		
		<?php echo $form->labelEx($model,'HOG_N_USUARIO',array('onkeypress'=>'return Rut(Visitas_VIS_RUT.value)','size'=>12,'maxlength'=>12)); ?>
		<?php 
		//echo $form->textField($model,'COMU_ID',array('size'=>60,'maxlength'=>100)); 
		//El siguiente muestra como relacionar 2 modelos distintos (COMUNIDAD con COMUNA)
		$com=yii::app()->user->comunidad;
		//echo $com;
		//'criteria'=>array('condition'=>"COM_CORREL = '$com'"),
		$criteria=new CDbCriteria;
		$criteria->condition = "COM_CORREL = '$com'";
		echo $form->dropDownList($model,'HOG_N_USUARIO',CHtml::listData(Hogar::model()->findAll($criteria, array('order'=>'HOG_N_HOGAR')),'HOG_N_USUARIO','HOG_N_HOGAR')); //Modelo,Ordenar por,Atributo a mostrar
		?>
		<?php echo $form->error($model,'HOG_N_USUARIO'); ?>
	</div>

	<div class="row" title="Nombre de la visita">
		<!-- Nombre de visita -->
		<?php echo $form->labelEx($model,'VIS_NOMBRE'); ?>
		<?php echo $form->textField($model,'VIS_NOMBRE',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'VIS_NOMBRE'); ?>
	</div>

	<div class="row" title="Apellido paterno de la visita">
		<!-- Apellido visita-->
		<?php echo $form->labelEx($model,'VIS_APELLIDOS'); ?>
		<?php echo $form->textField($model,'VIS_APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'VIS_APELLIDOS'); ?>
	</div>

	<div class="row" title="Fecha y hora de ingreso">
		<!-- Fecha de la visita-->
		<?php echo $form->labelEx($model,'VIS_FECHA'); ?>
		<?php echo $form->textField($model,'VIS_FECHA',array('class'=>'datetimepicker')); ?>
		<?php echo $form->error($model,'VIS_FECHA'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear' : 'Guardar'); ?>
	</div>

    </div>
<?php $this->endWidget(); ?>

</div><!-- form -->

