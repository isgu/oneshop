<?php
/* @var $this AttributeValueController */
/* @var $model AttributeValue */

$this->breadcrumbs=array(
	'Attribute Values'=>array('index'),
	$model->name,
);
?>

<h1>View AttributeValue #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'attribute_id',
		'status',
		'sort',
		'category_id',
		'creation_time',
	),
)); ?>
