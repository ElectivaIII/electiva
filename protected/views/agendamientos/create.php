<h1>Crear Agendamientos</h1>
<?php $form=$this->beginWidget("CActiveForm");?>
<br>Cédula<br>
<?php echo $form->textField($model,"cedula");?>
<?php echo $form->error($model, "cedula");?>
<br>Matricula<br>
<?php echo $form->textField($model,"chapa");?>
<?php echo $form->error($model, "chapa");?>
<br>Mantenimiento<br>
<?php echo $form->textField($model,"mantenimiento");?>
<?php echo $form->error($model, "mantenimiento");?>
<br>Comentario<br>
<?php echo $form->textField($model,"comentario");?>
<?php echo $form->error($model, "comentario");?>
<br>Taller<br>
<?php echo $form->textField($model,"taller");?>
<?php echo $form->error($model, "taller");?>
<br>Fecha<br>
<?php echo $form->textField($model,"fecha");?>
<?php echo $form->error($model, "fecha");?>
<br>
<?php echo CHtml::submitButton("Crear", array("class"=>"btn btn-primary btn-large"));?>
<?php $this->endWidget();?>