<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Registrar',
);

$this->menu=array(
	array('label'=>'Lista de Repuestos', 'url'=>array('index')),
	array('label'=>'Administrar Repuestos', 'url'=>array('admin')),
);
?>

<h1>Registrar Repuestos</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>