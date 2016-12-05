<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehiculoses'=>array('index'),
	$model->matricula=>array('view','id'=>$model->matricula),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehiculos', 'url'=>array('index')),
	array('label'=>'Create Vehiculos', 'url'=>array('create')),
	array('label'=>'View Vehiculos', 'url'=>array('view', 'id'=>$model->matricula)),
	array('label'=>'Manage Vehiculos', 'url'=>array('admin')),
);
?>

<h1>Update Vehiculos <?php echo $model->matricula; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>