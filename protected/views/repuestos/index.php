<?php 
$this->menu=array(
	array('label'=>'Administrar Repuestos', 'url'=>array('admin'), 'visible'=>!Yii::app()->user->isGuest,)
);  ?>


<h1>Repuestos</h1>
<table class="table">
	<tr>
		<td><strong>NOMBRE</strong></td>
		<td><strong>DESCRIPCIÓN</strong></td>
		<td><strong>REPUESTO</strong></td>
<?php foreach ($repuestos as $data):?>

	<tr>
		<td><?php echo $data->nombre?></td>
		<td><?php echo $data->descripcion?></td>
		<td>
	    	<?php echo CHtml::link("<img class='img-responsive' src='".Yii::app()->request->baseUrl.'/image/'.$data->imagen."' style='width:228px;height:228px;' title='Clic en la imagen para ver detalles'/>",array("view","id"=>$data->id));?>
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
