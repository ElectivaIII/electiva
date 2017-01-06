<h1>Agendar una visita al taller</h1>
<?php $form=$this->beginWidget("CActiveForm");?>
<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>


<div>
	<?php echo $form->labelEx($model,'c&eacute;dula *'); ?>
	<?php echo $form->textField($model,'cedula'); ?>
	<?php echo $form->error($model,'cedula'); ?>
</div>
<div>
	<?php echo $form->labelEx($model,'nombres *'); ?>
	<?php echo $form->textField($model,'nombre'); ?>
	<?php echo $form->error($model,'nombre'); ?>
</div>
<div>
	<?php echo $form->labelEx($model,'apellidos *'); ?>
	<?php echo $form->textField($model,'apellido'); ?>
	<?php echo $form->error($model,'apellido'); ?>
</div>
<div>
	<?php echo $form->labelEx($model,'chapa'); ?>
	<?php echo $form->textField($model,'chapa'); ?>
	<?php echo $form->error($model,'chapa'); ?>
</div>
<div class=”row”>

<?php echo $form->labelEx($model,'marca'); ?>

<?php echo $form->dropDownList($model,'marca', CHtml::listData(marcavehiculos::model()->findAll(array('order' => 'nombre ASC')), 'nombre', 'nombre'), array('empty'=>'Seleccione la Marca'));?>
<?php echo $form->error($model,'marca'); ?>
</div>
<div>
	<?php echo $form->labelEx($model,'mantenimiento'); ?>
	<?php echo $form->textField($model,'mantenimiento'); ?>
	<?php echo $form->error($model,'mantenimiento'); ?>
</div>
<div>
	<?php echo $form->labelEx($model,'comentario'); ?>
	<?php echo $form->textArea($model,'comentario',array('rows'=>6, 'cols'=>50)); ?>
	<?php echo $form->error($model,'comentario'); ?>
</div>
<div class=”row”>

<?php echo $form->labelEx($model,'taller'); ?>

<?php echo $form->dropDownList($model,'taller', CHtml::listData(talleres::model()->findAll(array('order' => 'nombre ASC')), 'nombre', 'nombre'), array('empty'=>'Seleccione un taller'));?>
<?php echo $form->error($model,'taller'); ?>
</div>


<div>
 	<?php echo $form->labelEx($model,'fecha'); ?>
 	<?php
 	if ($model->fecha!='') {
 		$model->fecha=date('d-m-Y',strtotime($model->fecha));
 	}
	 $this->widget('zii.widgets.jui.CJuiDatePicker', array(
	 'model'=>$model,
	 'attribute'=>'fecha',
	 'value'=>$model->fecha,
	 'language' => 'es',
	 'htmlOptions' => array('readonly'=>"readonly"),
 
		 'options'=>array(
		 'autoSize'=>true,
		 'defaultDate'=>$model->fecha,
		 'dateFormat'=>'dd-mm-yy',
		 'buttonImage'=>Yii::app()->baseUrl.'/image/calendar.png',
		 'buttonImageOnly'=>true,
		 'buttonText'=>'Fecha',
		 'selectOtherMonths'=>true,
		 'showAnim'=>'slide',
		 'showButtonPanel'=>true,
		 'showOn'=>'button',
		 'showOtherMonths'=>true,
		 'changeMonth' => 'true',
		 'changeYear' => 'true',
		 ),
 	)); ?>
 <?php echo $form->error($model,'fecha'); ?>
</div>


<?php echo CHtml::submitButton("Crear", array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>