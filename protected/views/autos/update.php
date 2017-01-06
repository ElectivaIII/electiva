<?php
/* @var $this AutosController */
/* @var $model Autos */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de Vehículos', 'url'=>array('index')),
	array('label'=>'Registrar Vehículo', 'url'=>array('create')),
	array('label'=>'Ver Vehículo', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Vehículos', 'url'=>array('admin')),

);
?>

<h1>Modificar Vehículo</h1>

<?php $this->renderPartial('_form', array('model'=>$model,"id"=>$model->id)); ?>