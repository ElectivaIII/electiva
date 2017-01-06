<?php
/* @var $this AutosController */
/* @var $model Autos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Vehículos', 'url'=>array('index')),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),
);
?>

<h1>Registrar Vehículo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>