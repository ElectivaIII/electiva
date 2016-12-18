<?php 
$this->menu=array(
	array('label'=>'Administrar Vehículos', 'url'=>array('admin'), 'visible'=>!Yii::app()->user->isGuest,)
);  ?>


<h1>Vehículos</h1>
<table class="table">
	<tr>
		<td><strong>MARCA</strong></td>
		<td><strong>MODELO</strong></td>
		<td><strong>AÑO</strong></td>
		<td><strong>AUTOS</strong></td>
<?php foreach ($autos as $data):?>

	<tr>
		<td><?php echo $data->marca?></td>
		<td><?php echo $data->modelo?></td>
		<td><?php echo $data->anho?></td>
		<td>
	    	<?php echo CHtml::link("<img class='img-responsive' src='".Yii::app()->request->baseUrl.'/image/'.$data->imagen."' title='Clic en la imagen para ver detalles'/>",array("view","id"=>$data->id));?>
	    </td>
	</tr>



<?php endforeach; ?>
 
</table>