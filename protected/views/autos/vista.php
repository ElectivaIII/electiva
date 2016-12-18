<h1>Ver</h1>
<div class="table-responsive">
	<table class='table'>

		<tr>
			<td><strong>MATRICULA</strong></td>
			<td><strong>MARCA</strong></td>
			<td><strong>MODELO</strong></td>
			<td><strong>AÑO</strong></td>
			<td><strong>KILOMETRAJE</strong></td>
			<td><strong>PRECIO</strong></td>
		</tr>
		<tr>
			<td><?php echo $model->matricula?></td>
			<td><?php echo $model->marca?></td>
			<td><?php echo $model->modelo?></td>
			<td><?php echo $model->anho?></td>
			<td><?php echo $model->kilometraje?></td>
			<td><?php echo $model->precio?></td></tr>
	</table>
</div>
  <div>
  	<?php echo CHtml::link("<img class='img-responsive' src='".Yii::app()->request->baseUrl.'/image/'.$model->imagen."'/>");?>
  </div>