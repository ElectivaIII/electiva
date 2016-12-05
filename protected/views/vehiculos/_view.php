<?php
/* @var $this VehiculosController */
/* @var $data Vehiculos */
?>

<div class="media">

	<b><?php echo CHtml::encode($data->getAttributeLabel('matricula')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->matricula), array('view', 'id'=>$data->matricula)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marca')); ?>:</b>
	<?php echo CHtml::encode($data->marca); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anho')); ?>:</b>
	<?php echo CHtml::encode($data->anho); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kilometraje')); ?>:</b>
	<?php echo CHtml::encode($data->kilometraje); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('precio')); ?>:</b>
	<?php echo CHtml::encode($data->precio); ?>
	<br />


</div>