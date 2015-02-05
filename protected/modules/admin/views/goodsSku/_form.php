<?php
/* @var $this GoodsSkuController */
/* @var $model GoodsSku */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_goods_id"><?php echo $model->getAttributeLabel('goods_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_goods_id" name="GoodsSku[goods_id]" class="form-control" value="<?php echo CHtml::encode($model->goods_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('goods_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_stock"><?php echo $model->getAttributeLabel('stock')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_stock" name="GoodsSku[stock]" class="form-control" value="<?php echo CHtml::encode($model->stock); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('stock');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_price"><?php echo $model->getAttributeLabel('price')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_price" name="GoodsSku[price]" class="form-control" value="<?php echo CHtml::encode($model->price); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('price');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_code"><?php echo $model->getAttributeLabel('code')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_code" name="GoodsSku[code]" class="form-control" value="<?php echo CHtml::encode($model->code); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('code');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_sku_name"><?php echo $model->getAttributeLabel('sku_name')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_sku_name" name="GoodsSku[sku_name]" class="form-control" value="<?php echo CHtml::encode($model->sku_name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sku_name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_creation_time" name="GoodsSku[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('creation_time');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_update_time"><?php echo $model->getAttributeLabel('update_time')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_update_time" name="GoodsSku[update_time]" class="form-control" value="<?php echo CHtml::encode($model->update_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('update_time');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_status" name="GoodsSku[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsSku_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsSku_sort" name="GoodsSku[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sort');?></span>
		</div>
	</div>

	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<button type="submit" class="btn btn-primary"><?php echo $model->isNewRecord ? '创建' : '保存 '; ?>
</button>
			<button type="reset" class="btn">重置</button>
		</div>
	</div>
</form>

