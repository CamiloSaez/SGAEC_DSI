
<!-- ======================================================================================================================== -->
<div class="container">
<div class="span3">
    <div class="well">
            <ul class="nav nav-list">

            <?php
			$cuerpo = '<p> Bienvenido señor/a '.Yii::app()->user->getState('nombre').' </p>';                
			 echo $cuerpo;
			?>
				
            </ul>
    </div><!--/.well -->
</div>	

<div class="span8">
	<div class="well well-small">
	<h4>
	<?php
	$titulo="CUENTA ADMINISTRADOR ";
	echo $titulo;
	?></h4>


		<div class="form">
		<?php echo CHtml::beginForm(); ?>
			
		<div class="row">
			<?php echo 'Seleccione la comunidad que desea administrar'; ?>
			<?php //echo dropDownList($model,'TFAL_CORREL', CHtml::listData(Comunidad::model()->findAll(),'COM_CORREL', 'COM_NOMBRE'));?>		
		</div>


		

		<?php echo CHtml::endForm(); ?>
		</div><!-- form -->


	</div>
</div>
</div>

<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>







