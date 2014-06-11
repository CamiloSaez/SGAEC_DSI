
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



	<?php if( yii::app()->user->checkAccess("admin") ) {

		Echo "<h4> Seleccione la comunidad que desea administrar </h4><br>";
		foreach ($com as $data): ?> 

		<li >
			<?php echo "Comunidad : ";?>
				<small>
					<?php $data->COM_CORREL;?>					
				</small>
				<?php echo CHtml::link($data->COM_NOMBRE,array("perfil/Capture", "id"=>$data->COM_CORREL), 
												array("class"=>"btn-primary  btn-large")); ?>	
			<hr>																						
		</a>
	</li>


<?php /*

		<a href="#" class="btn btn-primary btn-large"><i class="icon-white icon-home"></i> <?php echo $data->COM_NOMBRE; ?></a>

		<h3> <?php // echo $data->COM_CORREL; ?>  </h3>		
*/?>		

	<?php endforeach; 

	}
 ?>




	</div>
</div>
</div>

<?php
/* @var $this FaltaController */
/* @var $model Falta */
/* @var $form CActiveForm */
?>







