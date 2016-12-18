<?php
/* @var $this AutosController */
/* @var $model Autos */

$this->breadcrumbs=array(
	'Vehiculos'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'List Autos', 'url'=>array('index')),
	array('label'=>'Manage Autos', 'url'=>array('admin')),
);
?>

<h1>Modificar Vehiculo</h1>

<?php $this->renderPartial('_form', array('model'=>$model,"id"=>$model->id)); ?>