<?php
/* @var $this GoodsImageController */
/* @var $model GoodsImage */

$this->breadcrumbs=array(
	'Goods Images'=>array('index'),
	$model->id,
);
?>

<h1>View GoodsImage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'url',
		'goods_id',
		'position',
		'is_main',
		'create_time',
	),
)); ?>
