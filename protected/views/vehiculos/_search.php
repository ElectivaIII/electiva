<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div>
		<?php echo $form->label($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div>
		<?php echo $form->label($model,'anho'); ?>
		<?php echo $form->textField($model,'anho'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'kilometraje'); ?>
		<?php echo $form->textField($model,'kilometraje'); ?>
	</div>

	<div>
		<?php echo $form->label($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
	</div>

	

	<div class="buttons">
		<?php echo CHtml::submitButton('Search', array("class"=>"btn btn-primary btn")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->