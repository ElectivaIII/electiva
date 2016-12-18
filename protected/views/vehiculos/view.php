<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehiculoses'=>array('index'),
	$model->matricula,
);

$this->menu=array(
	array('label'=>'List Vehiculos', 'url'=>array('index')),
	array('label'=>'Create Vehiculos', 'url'=>array('create')),
	array('label'=>'Update Vehiculos', 'url'=>array('update', 'id'=>$model->matricula)),
	array('label'=>'Delete Vehiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->matricula),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehiculos', 'url'=>array('admin')),
);
?>

<h1>View Vehiculos #<?php echo $model->matricula; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'htmlOptions'=>array("class"=>"table table-striped"),
	'attributes'=>array(
		'matricula',
		'marca',
		'anho',
		'kilometraje',
		'precio',
		'img',
	),
)); ?>
