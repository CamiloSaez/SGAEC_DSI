
<?php
/* @var $this EspacioComunController */
/* @var $data EspacioComun */
?>

<div class="span8">
   <div class="well">


	<b><?php 
	// El siguiente codigo permite extraer el label de un atributo de otro modelo
	echo CHtml::encode(TipoEspComun::model()->getAttributeLabel('TIP_NOMBRE'));
	?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ESP_CORREL), array('view', 'id'=>$data->ESP_CORREL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TIP_CORREL')); ?>:</b>
	<?php echo CHtml::encode($data->TIP_CORREL); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESP_DESCRIPCION')); ?>:</b>
	<?php echo CHtml::encode($data->ESP_DESCRIPCION); ?>
	<br />


  </div>
</div>

