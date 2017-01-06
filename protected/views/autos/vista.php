<?php $this->menu=array(
	array('label'=>'Lista de Vehículos', 'url'=>array('index')),
	array('label'=>'Registro de Vehículos', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest,),
); ?>


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
			<td><?php echo number_format($model->anho, 0, '', '.')?></td>
			<td><?php echo number_format($model->kilometraje, 0, '', '.')?></td>
			<td><?php echo number_format($model->precio, 0, '', '.')?></td></tr>
	</table>
</div>
  <div>
  	<div align="center"><?php echo CHtml::link("<img class='img-responsive' src='".Yii::app()->request->baseUrl.'/image/'.$model->imagen."' '/>");?></div>
  	<br>
  </div>

<td><?php echo $model->modelo?></td>

