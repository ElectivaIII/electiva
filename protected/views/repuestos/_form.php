<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'repuestos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
	'enableClientValidation'=>false,'htmlOptions'=>array('enctype'=>'multipart/form-data'),
	'clientOptions'=>array('validateOnSubmit'=>false,))); ?>


	<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

	<div>
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'marca'); ?>
		<?php echo $form->dropDownList($model,'marca', CHtml::listData(marcarepuestos::model()->findAll(array('order' => 'nombre ASC')), 'nombre', 'nombre'), array('empty'=>'Seleccione la Marca'));?>
		<?php echo $form->error($model,'marca'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textField($model,'descripcion',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'precio'); ?>
		<?php echo $form->textField($model,'precio',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'precio'); ?>
	</div>

	<div>
		<?php echo $form->labelEx($model,'foto'); ?>
		<?php echo $form->fileField($model,'foto'); ?>
		<?php echo $form->error($model,'foto'); ?>
	</div>
	<?php if($model->isNewRecord!='1') { ?>
	<div>
     <?php echo CHtml::image(Yii::app()->request->baseUrl.'/image/'.$model->imagen,"imagen",array("width"=>200)); ?>  
   
	</div>
    <?php } ?>

	<div class="buttons">
	<br>
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' :'Guardar', array("class"=>"btn btn-primary btn-large")); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->