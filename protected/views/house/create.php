<?php
/* @var $this HouseController */
/* @var $model House */

$this->breadcrumbs=array(
	'Houses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List House', 'url'=>array('index')),
	array('label'=>'Manage House', 'url'=>array('admin')),
);
?>

<h1>Create House</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>