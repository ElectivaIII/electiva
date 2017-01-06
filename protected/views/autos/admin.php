<?php
/* @var $this AutosController */
/* @var $model Autos */

$this->breadcrumbs=array(
	'Vehículos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Vehículos', 'url'=>array('index')),
	array('label'=>'Registro de Vehículos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#autos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Vehículos</h1>



<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'autos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'pager'=>array("htmlOptions"=>array("class"=>"pagination")),
	'columns'=>array(
		'id',
		'matricula',
		'marca',
		'anho',
		'kilometraje',
		'precio',
		
		'imagen',
		
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}{delete}',
		    'buttons'=>array
		    (
		    	'delete'=>array(
		            'url' => function($model) {
                        return Yii::app()->controller->createUrl('delete', ['id' => $model->id]);
                        },
		        ),
		     ),
		),
	),
)); ?>
