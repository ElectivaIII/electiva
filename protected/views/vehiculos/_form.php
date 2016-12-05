<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehiculos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div>
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'anho'); ?>
		<?php echo $form->textField($model,'anho'); ?>
		<?php echo $form->error($model,'anho'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'kilometraje'); ?>
		<?php echo $form->textField($model,'kilometraje'); ?>
		<?php echo $form->error($model,'kilometraje'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio'); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div class="buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->