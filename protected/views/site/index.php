<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenido al sistema <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Si usted ya es cliente, felicidades! tiene en sus manos el mejor sistema para gestionar su negocio de inmuebles.</p>

<p>Si no lo es, no se preocupe aún está a tiempo de contactarse con el equipo para tramitar su compra. No espere más y contáctenos <a href="index.php?r=site/contact">"AQUÍ"</a></p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>
