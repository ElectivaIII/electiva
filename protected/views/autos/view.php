<?php
/* @var $this AutosController */
/* @var $model Autos */

$this->breadcrumbs=array(
	'Autoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Autos', 'url'=>array('index')),
	array('label'=>'Create Autos', 'url'=>array('create')),
	array('label'=>'Update Autos', 'url'=>array('update', 'id'=>$model->id))
	array('label'=>'Delete Autos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'¿Está seguro de que desea eliminar el registro?')),
	array('label'=>'Manage Autos', 'url'=>array('admin')),
);
?>

<h1>View Autos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'matricula',
		'marca',
		'anho',
		'kilometraje',
		'precio',
		'imagen',
	),
)); ?>
