<?php
/* @var $this GoodsSkuController */
/* @var $model GoodsSku */

$this->breadcrumbs=array(
	'Goods Skus'=>array('index'),
	$model->id,
);
?>

<h1>View GoodsSku #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'goods_id',
		'stock',
		'price',
		'code',
		'sku_name',
		'creation_time',
		'update_time',
		'status',
		'sort',
	),
)); ?>
