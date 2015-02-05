<?php
/* @var $this GoodsAttrController */
/* @var $model GoodsAttr */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="GoodsAttr[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('goods_id')?>" name="GoodsAttr[goods_id]" value="<?php echo CHtml::encode($model->goods_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('attr_id')?>" name="GoodsAttr[attr_id]" value="<?php echo CHtml::encode($model->attr_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('attr_value_id')?>" name="GoodsAttr[attr_value_id]" value="<?php echo CHtml::encode($model->attr_value_id); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_sku')?>" name="GoodsAttr[is_sku]" value="<?php echo CHtml::encode($model->is_sku); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sku_id')?>" name="GoodsAttr[sku_id]" value="<?php echo CHtml::encode($model->sku_id); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="GoodsAttr[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
