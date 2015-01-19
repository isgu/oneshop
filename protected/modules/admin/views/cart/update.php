<?php
/* @var $this CartController */
/* @var $model Cart */

$this->breadcrumbs=array(
	'Carts'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>