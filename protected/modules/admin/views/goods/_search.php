<?php
/* @var $this GoodsController */
/* @var $model Goods */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="Goods[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('name')?>" name="Goods[name]" value="<?php echo CHtml::encode($model->name); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('brand_id')?>" name="Goods[brand_id]" value="<?php echo CHtml::encode($model->brand_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('view_price')?>" name="Goods[view_price]" value="<?php echo CHtml::encode($model->view_price); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="Goods[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="Goods[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="Goods[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('update_time')?>" name="Goods[update_time]" value="<?php echo CHtml::encode($model->update_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
