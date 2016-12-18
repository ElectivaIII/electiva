<?php
/* @var $this ContactenosController */
/* @var $model Contactenos */

$this->breadcrumbs=array(
	'Contactenoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Contactenos', 'url'=>array('index')),
	array('label'=>'Create Contactenos', 'url'=>array('create')),
	array('label'=>'Update Contactenos', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Contactenos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Contactenos', 'url'=>array('admin')),
);
?>

<h1>View Contactenos #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombres',
		'apellidos',
		'ci',
		'telefono',
		'email',
		'comentario',
	),
)); ?>
