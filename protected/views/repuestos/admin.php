<?php
/* @var $this RepuestosController */
/* @var $model Repuestos */

$this->breadcrumbs=array(
	'Repuestos'=>array('index'),
	'Administrar',
);

$this->menu=array(
	array('label'=>'Lista de Repuestos', 'url'=>array('index')),
	array('label'=>'Registrar Repuestos', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#repuestos-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Repuestos</h1>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'repuestos-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'nombre',
		'marca',
		'descripcion',
		'precio',
		'imagen',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
