<?php
/* @var $this VehiculosController */
/* @var $model Vehiculos */

$this->breadcrumbs=array(
	'Vehiculoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Vehiculos', 'url'=>array('index')),
	array('label'=>'Manage Vehiculos', 'url'=>array('admin')),
);
?>

<h1>Create Vehiculos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>