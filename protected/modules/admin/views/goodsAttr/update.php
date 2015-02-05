<?php
/* @var $this GoodsAttrController */
/* @var $model GoodsAttr */

$this->breadcrumbs=array(
	'Goods Attrs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>