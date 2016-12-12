<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="media">

	<!-- <b>:</b> -->

	<br />
	<div class="media-body">
		<h1 class="media-heading">
			<?php echo CHtml::encode($data->getAttributeLabel('id')); ?><?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
		</h1>
	</div>

<!-- 	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	
	<br /> -->

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />


</div>