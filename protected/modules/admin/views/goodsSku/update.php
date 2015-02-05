<?php
/* @var $this GoodsSkuController */
/* @var $model GoodsSku */

$this->breadcrumbs=array(
	'Goods Skus'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>