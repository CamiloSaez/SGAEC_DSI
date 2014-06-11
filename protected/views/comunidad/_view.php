<?php
/* @var $this ComunidadController */
/* @var $data Comunidad */
?>



<!--MODIFICAR: camiar view por well. la clase view no existe en el CSS-->
<div class="span8">
<!--MODIFICAR: Si el administrador que esta viendo sus condominios es el mismo al cual le pertenece el condominio entonces muestra los datos del condominio-->
	<?php
	if(CHtml::encode($data->ADM_RUT)==yii::app()->user->id){
	?>
<!----------------------------->
<div class="well">
<!------------------->
	

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_CORREL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COM_CORREL), array('view', 'id'=>$data->COM_CORREL)); ?>
	<br />

	<!-- Al comentar lo siguiente no será posible modificar ni consultar por el administrador puesto que siempre será quien lo vea. (index-view).
	<b><?php
		// echo CHtml::encode($data->getAttributeLabel('ADM_RUT')); 
	?>:</b>
	<?php
		// echo CHtml::encode($data->ADM_RUT); 
	?>
	<br />
	-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_NOMBRE')); ?>:</b>
	<?php echo CHtml::encode($data->COM_NOMBRE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_DIRECCION')); ?>:</b>
	<?php echo CHtml::encode($data->COM_DIRECCION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_N_HOGARES')); ?>:</b>
	<?php echo CHtml::encode($data->COM_N_HOGARES); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COMU_ID')); ?>:</b>
	<?php echo CHtml::encode($data->COMU_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_TELEFONO')); ?>:</b>
	<?php echo CHtml::encode($data->COM_TELEFONO); ?>
	<br />
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('COM_MTS_2')); ?>:</b>
	<?php echo CHtml::encode($data->COM_MTS_2); ?>
	<br />
	

<!--MODIFICAR: Cerrar los div-->
</div>
<!--MODIFICAR: Cerrar el if inicial-->
	<?php
	}
	?>
<!-------------------------------->
</div>
<!------------------------------------------------------------------------>