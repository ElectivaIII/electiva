<?php
/* @var $this ContactenosController */
/* @var $model Contactenos */

$this->breadcrumbs=array(
	'Contactenoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Contactenos', 'url'=>array('index')),
	array('label'=>'Create Contactenos', 'url'=>array('create')),
	array('label'=>'View Contactenos', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Contactenos', 'url'=>array('admin')),
);
?>

<h1>Update Contactenos <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>