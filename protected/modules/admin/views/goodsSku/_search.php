<?php
/* @var $this GoodsSkuController */
/* @var $model GoodsSku */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="GoodsSku[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('goods_id')?>" name="GoodsSku[goods_id]" value="<?php echo CHtml::encode($model->goods_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('stock')?>" name="GoodsSku[stock]" value="<?php echo CHtml::encode($model->stock); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('price')?>" name="GoodsSku[price]" value="<?php echo CHtml::encode($model->price); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('code')?>" name="GoodsSku[code]" value="<?php echo CHtml::encode($model->code); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sku_name')?>" name="GoodsSku[sku_name]" value="<?php echo CHtml::encode($model->sku_name); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="GoodsSku[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('update_time')?>" name="GoodsSku[update_time]" value="<?php echo CHtml::encode($model->update_time); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="GoodsSku[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="GoodsSku[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
