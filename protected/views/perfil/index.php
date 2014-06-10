
<!-- ======================================================================================================================== -->
<div class="container">
<div class="span3">
    <div class="well">
            <ul class="nav nav-list">
              <?php
				echo $menuLateral;
			  ?>
            </ul>
    </div><!--/.well -->
</div>	

<div class="span8">
	<div class="well well-small">
	<h4>
	<?php
	echo $titulo;
	?></h4>
	<?php
	 echo $cuerpo;
	?>
	<br>
<?php if( yii::app()->user->checkAccess("admin") ) echo CHtml::link("CAMBIAR COMUNIDAD",array("perfil/capture", "id"=>NULL), 
												array("class"=>"btn-primary  btn-small")); ?>	
	</div>
</div>
</div>