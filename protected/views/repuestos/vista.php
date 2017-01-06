<?php $this->menu=array(
	array('label'=>'Lista de Repuestos', 'url'=>array('index')),
	array('label'=>'Registro de Repuesto', 'url'=>array('create'), 'visible'=>!Yii::app()->user->isGuest,),
); ?>


<h1>Ver</h1>
<div class="table-responsive">
	<table class='table'>

		<tr>
			<td><strong>NOMBRE</strong></td>
			<td><strong>MARCA</strong></td>
			<td><strong>DESCRIPCIÓN</strong></td>
			<td><strong>PRECIO</strong></td>
		</tr>
		<tr>
			<td><?php echo $model->nombre?></td>
			<td><?php echo $model->marca?></td>
			<td><?php echo $model->descripcion?></td>
			<td><?php echo number_format($model->precio, 0, '', '.')?></td></tr>
	</table>
</div>
  <div>
  	<div align="center"><?php echo CHtml::link("<img class='img-responsive' src='".Yii::app()->request->baseUrl.'/image/'.$model->imagen."''/>");?></div>
  	<br>
  </div>
