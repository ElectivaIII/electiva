<?php 
$this->menu=array(
	array('label'=>'Administrar Vehículos', 'url'=>array('admin'), 'visible'=>!Yii::app()->user->isGuest,)
);  ?>


<h1>Vehículos</h1>


<table class="table table-responsive">

	<tr>
		<td><strong>MARCA</strong></td>
		<td><strong>MODELO</strong></td>
		<td><strong>AÑO</strong></td>
		<td><strong>AUTOS</strong></td>
<?php foreach ($autos as $data):?>

	<tr>
		<td><?php echo $data->marca?></td>
		<td><?php echo $data->modelo?></td>
		<td><?php echo number_format($data->anho, 0, '', '.')?></td>
		<td>
	    	<?php echo CHtml::link("<img src='".Yii::app()->request->baseUrl.'/image/'.$data->imagen."' style='width:228px;height:228px;' title='Clic en la imagen para ver detalles'/>",array("view","id"=>$data->id));?>
	    </td>
	</tr>



<?php endforeach; ?>

</table>

<div class="pagination" align='right'>
	<?php $this->widget('CLinkPager', array(
     'pages' => $pages,
    'header' => '',
    'firstPageLabel' => 'Primero',
    'nextPageLabel' => 'Siguiente',
    'prevPageLabel' => 'Anterior',
    'lastPageLabel' => 'Último',
    'selectedPageCssClass' => 'active',
    'hiddenPageCssClass' => 'disabled',
    'htmlOptions' => array(
        'class' => '',
    )
   
)) ?>	
</div>
