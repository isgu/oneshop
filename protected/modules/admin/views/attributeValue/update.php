<?php
/* @var $this AttributeValueController */
/* @var $model AttributeValue */

$this->breadcrumbs=array(
	'Attribute Values'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>