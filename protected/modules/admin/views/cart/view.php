<?php
/* @var $this CartController */
/* @var $model Cart */

$this->breadcrumbs=array(
	'Carts'=>array('index'),
	$model->title,
);
?>

<h1>View Cart #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'uid',
		'iid',
		'title',
		'thumb',
		'amount',
		'count',
		'add_time',
		'sku',
	),
)); ?>
