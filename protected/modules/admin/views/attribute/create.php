<?php
/* @var $this AttributeController */
/* @var $model Attribute */

$this->breadcrumbs=array(
	'Attributes'=>array('index'),
	'Create',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>