<?php
/* @var $this ArchivoController */
/* @var $data Archivo */
?>


<div class="span8">
<div class="well">

<?php if($data->COM_CORREL == yii::app()->user->comunidad){?>
	<ul>
    
        <li>
		
		<a href="<?php echo Yii::app()->request->baseUrl?>/uploads/<?php echo $data->ARC_ARCHIVO; ?>"><?php echo '<strong>'; echo CHtml::encode($data->ARC_PERFIL); echo'</strong>'; ?><img width="20" height="20" src="<?php echo Yii::app()->request->baseUrl?>/images/documento_PDF.png"></a>
        </li>
    
</ul>

<?php }?>
</div>
</div>