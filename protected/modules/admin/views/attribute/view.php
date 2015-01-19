<?php
/* @var $this AttributeController */
/* @var $model Attribute */

$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	$model->name,
);
?>

<h1>View Attribute #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'category_id',
		'is_alias',
		'is_color',
		'is_enu',
		'is_input',
		'is_crux',
		'is_sale',
		'is_search',
		'is_must',
		'is_choose',
		'status',
		'sort',
		'creation_time',
	),
)); ?>
