<?php
/* @var $this GoodsImageController */
/* @var $model GoodsImage */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsImage_url"><?php echo $model->getAttributeLabel('url')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsImage_url" name="GoodsImage[url]" class="form-control" value="<?php echo CHtml::encode($model->url); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('url');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsImage_goods_id"><?php echo $model->getAttributeLabel('goods_id')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsImage_goods_id" name="GoodsImage[goods_id]" class="form-control" value="<?php echo CHtml::encode($model->goods_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('goods_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsImage_position"><?php echo $model->getAttributeLabel('position')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsImage_position" name="GoodsImage[position]" class="form-control" value="<?php echo CHtml::encode($model->position); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('position');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsImage_is_main"><?php echo $model->getAttributeLabel('is_main')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsImage_is_main" name="GoodsImage[is_main]" class="form-control" value="<?php echo CHtml::encode($model->is_main); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_main');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="GoodsImage_create_time"><?php echo $model->getAttributeLabel('create_time')?></label>
		<div class="col-md-4">
			<input type="text" id="GoodsImage_create_time" name="GoodsImage[create_time]" class="form-control" value="<?php echo CHtml::encode($model->create_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('create_time');?></span>
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

