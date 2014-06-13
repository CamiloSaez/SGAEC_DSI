<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/css/jquery.datetimepicker.css"/ >

	<link rel="stylesheet" type="text/css" href="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/calendario/tcal.css"/ >

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="<?php echo yii::app()->theme->baseUrl;?>/http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="<?php echo yii::app()->theme->baseUrl;?>/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo yii::app()->theme->baseUrl;?>/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo yii::app()->theme->baseUrl;?>/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo yii::app()->theme->baseUrl;?>/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo yii::app()->theme->baseUrl;?>/assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40">
<div class="container">
<header class="header">
<div class="row">
	<h1 class="span6"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
	<div class="span6"><div class="pull-right"><br/> <a class="pull-right" href="<?php echo yii::app()->theme->baseUrl;?>/mailto: <?php echo CHtml::encode(Yii::app()->params['adminEmail']); ?>"><small> <?php echo CHtml::encode(Yii::app()->params['adminEmail']); ?></small></a></div></div>
</div>
</header>

<!--MODIFICAR: Para mantener el footer separado-->
<div class="container">
<!--------------------------------------------------------------->

<?php //if( yii::app()->user->checkAccess("admin")) echo "asdasas";?>
  <!-- Navbar
    ================================================== -->
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
	

<!-- Menu
      ================================================== -->

			<?php $this->widget('zii.widgets.CMenu',array(
			'htmlOptions'=>array("class"=>"nav"),
			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')), //Controlador/Accion  ej site/index
				
        array('label'=>'Perfil', 'url'=>array('/perfil'), 'visible'=>!Yii::app()->user->isGuest),

        array('label'=>'Avisos', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contacto', 'url'=>array('/site/contact'), 'visible'=> Yii::app()->user->isGuest),
				
				array('label'=>'Iniciar Sesión', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Comunidad', 'url'=>array('/Comunidad/'), 'visible'=>yii::app()->user->checkAccess("admin")),
				
				array('label'=>'Cambiar Clave', 'url'=>array('/cambclave'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Cerrar Sesión', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>

<!--Fin Menu
      ================================================== -->

	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>



<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>


<?php echo $content;?>



<!--MODIFICAR: Cierra div container-->
</div>
<!--------------------------------------------------------------->

<!-- Footer
      ================================================== -->

<footer class="footer">
<hr class="soften"/>
<p>
	<span class="pull-right">
	<a class="btn btn-primary" href="#">t</a> 
	<a class="btn btn-danger" href="#">g+</a> 
	<a class="btn btn-primary" href="#">f</a> 
	</span>
<a href="<?php echo yii::app()->theme->baseUrl;?>/index.html">Inicio</a> - 
<a href="<?php echo yii::app()->theme->baseUrl;?>/about_us.html">Sobre Newen</a> - 
<a href="<?php echo yii::app()->theme->baseUrl;?>/webdevelopment.html">Qué hacemos?</a> -
<a href="<?php echo yii::app()->theme->baseUrl;?>/contact.html">Soporte</a>
</p>
<hr class="soften"/>
<p>&copy; Equipo Newen<br/><br/></p>
 </footer>
 </div><!-- /container -->


  </body>
     <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery.js" type="text/javascript"></script> 
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery.Rut.js" type="text/javascript"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery.Rut.min.js" type="text/javascript"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/funciones.js" type="text/javascript"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery.datetimepicker.js"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/js/jquery.maskedinput.js"></script>
	<script src="<?php echo yii::app()->theme->baseUrl;?>/bootstrap/calendario/tcal.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.2/jquery-ui.min.js"></script>
<!--
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
-->	
	<script type="text/javascript">
		jQuery('.datetimepicker').datetimepicker({
		format:'Y/m/d H:i',
		lang:'es',
		maxDate: 'today',
		minDate: '-1970/01/02'
		});
	</script>
	<script type="text/javascript">
		jQuery('.datetimepicker2').datetimepicker({
		format:'Y/m/d H:i',
		lang:'es',
		minDate: 'today',
		maxDate: '+1970/01/02'
		});
	</script>	


	<script type="text/javascript">
		jQuery('.datetimepicker3').datetimepicker({
		format:'Y/m/d',
		lang:'es',
		maxDate: 'today',
		minDate: '-1970/01/02'
		});
	</script>

	<script type="text/javascript">
		jQuery(function($){
   $(".rut").Rut({
  on_error: function(){ alert('Rut incorrecto'); },
  format_on: 'keyup'
});
});
	</script>
</html>