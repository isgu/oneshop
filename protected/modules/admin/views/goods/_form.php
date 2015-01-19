<?php
/* @var $this GoodsController */
/* @var $model Goods */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_name"><?php echo $model->getAttributeLabel('name')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_name" name="Goods[name]" class="form-control" value="<?php echo CHtml::encode($model->name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_brand_id"><?php echo $model->getAttributeLabel('brand_id')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_brand_id" name="Goods[brand_id]" class="form-control" value="<?php echo CHtml::encode($model->brand_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('brand_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_view_price"><?php echo $model->getAttributeLabel('view_price')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_view_price" name="Goods[view_price]" class="form-control" value="<?php echo CHtml::encode($model->view_price); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('view_price');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_status" name="Goods[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_sort" name="Goods[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sort');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_creation_time" name="Goods[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('creation_time');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Goods_update_time"><?php echo $model->getAttributeLabel('update_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Goods_update_time" name="Goods[update_time]" class="form-control" value="<?php echo CHtml::encode($model->update_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('update_time');?></span>
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

