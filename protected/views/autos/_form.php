<?php
/* @var $this AutosController */
/* @var $model Autos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'autos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>false,))); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'matricula'); ?>
		<?php echo $form->textField($model,'matricula',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'matricula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->textField($model,'marca',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'modelo'); ?>
		<?php echo $form->textField($model,'modelo',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anho'); ?>
		<?php echo $form->textField($model,'anho',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'anho'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kilometraje'); ?>
		<?php echo $form->textField($model,'kilometraje',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'kilometraje'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>
    


    
	

	<div class="row">
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>
	<?php if($model->isNewRecord!='1') { ?>
	<div class="row">
     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/image/'.$model->imagen,"imagen",array("width"=>200)); ?>  
   
	</div>
    <?php } ?>
	
    
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->