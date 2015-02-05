<?php
/* @var $this GoodsAttrController */
/* @var $model GoodsAttr */

$this->breadcrumbs=array(
	'Goods Attrs'=>array('index'),
	$model->id,
);
?>

<h1>View GoodsAttr #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'goods_id',
		'attr_id',
		'attr_value_id',
		'is_sku',
		'sku_id',
		'creation_time',
	),
)); ?>
