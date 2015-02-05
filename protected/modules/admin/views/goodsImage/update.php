<?php
/* @var $this GoodsImageController */
/* @var $model GoodsImage */

$this->breadcrumbs=array(
	'Goods Images'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>