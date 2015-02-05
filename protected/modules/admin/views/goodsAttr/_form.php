<?php
/* @var $this GoodsAttrController */
/* @var $model GoodsAttr */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_goods_id"><?php echo $model->getAttributeLabel('goods_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_goods_id" name="GoodsAttr[goods_id]" class="form-control" value="<?php echo CHtml::encode($model->goods_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('goods_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_attr_id"><?php echo $model->getAttributeLabel('attr_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_attr_id" name="GoodsAttr[attr_id]" class="form-control" value="<?php echo CHtml::encode($model->attr_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('attr_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_attr_value_id"><?php echo $model->getAttributeLabel('attr_value_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_attr_value_id" name="GoodsAttr[attr_value_id]" class="form-control" value="<?php echo CHtml::encode($model->attr_value_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('attr_value_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_is_sku"><?php echo $model->getAttributeLabel('is_sku')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_is_sku" name="GoodsAttr[is_sku]" class="form-control" value="<?php echo CHtml::encode($model->is_sku); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_sku');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_sku_id"><?php echo $model->getAttributeLabel('sku_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_sku_id" name="GoodsAttr[sku_id]" class="form-control" value="<?php echo CHtml::encode($model->sku_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sku_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsAttr_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsAttr_creation_time" name="GoodsAttr[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('creation_time');?></span>
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

