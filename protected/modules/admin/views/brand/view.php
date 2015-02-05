<?php
/* @var $this BrandController */
/* @var $model Brand */

$this->breadcrumbs=array(
	'Brands'=>array('index'),
	$model->id,
);
?>

<h1>View Brand #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'category_id',
		'zh_name',
		'en_name',
		'description',
		'logo',
		'url',
		'creat_time',
		'status',
		'sort',
	),
)); ?>
