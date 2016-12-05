<?php
/* @var $this VehiculosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehiculoses',
);

$this->menu=array(
	array('label'=>'Create Vehiculos', 'url'=>array('create')),
	array('label'=>'Manage Vehiculos', 'url'=>array('admin')),
);
?>

<h1>Vehiculoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
