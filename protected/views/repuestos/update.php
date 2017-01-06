<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Modificar',
);

$this->menu=array(
	array('label'=>'Lista de  Repuestos', 'url'=>array('index')),
	array('label'=>'Registrar Repuestos', 'url'=>array('create')),
	array('label'=>'Ver Repuestos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Repuestos', 'url'=>array('admin')),
);
?>

<h1>Modificar Repuestos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model,"id"=>$model->id)); ?>