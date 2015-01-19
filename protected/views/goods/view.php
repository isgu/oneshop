<?php
/* @var $this GoodsController */
/* @var $model Goods */

$this->breadcrumbs=array(
	'Goods'=>array('index'),
	$model->name,
);
?>

<h1>View Goods #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'brand_id',
		'view_price',
		'status',
		'sort',
		'creation_time',
		'update_time',
	),
)); ?>
