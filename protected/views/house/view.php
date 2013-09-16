<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	'Houses'=>array('index'),
	$model->title,
);

$this->menu=array(
	array('label'=>'List House', 'url'=>array('index')),
	array('label'=>'Create House', 'url'=>array('create')),
	array('label'=>'Update House', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete House', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage House', 'url'=>array('admin')),
);
?>

<h1>View House #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'desc',
		'status',
	),
)); ?>
