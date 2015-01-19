<?php
/* @var $this GoodsImageController */
/* @var $model GoodsImage */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="GoodsImage[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('url')?>" name="GoodsImage[url]" value="<?php echo CHtml::encode($model->url); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('goods_id')?>" name="GoodsImage[goods_id]" value="<?php echo CHtml::encode($model->goods_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('position')?>" name="GoodsImage[position]" value="<?php echo CHtml::encode($model->position); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_main')?>" name="GoodsImage[is_main]" value="<?php echo CHtml::encode($model->is_main); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('create_time')?>" name="GoodsImage[create_time]" value="<?php echo CHtml::encode($model->create_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
