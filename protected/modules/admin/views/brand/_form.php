<?php
/* @var $this BrandController */
/* @var $model Brand */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_category_id"><?php echo $model->getAttributeLabel('category_id')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_category_id" name="Brand[category_id]" class="form-control" value="<?php echo CHtml::encode($model->category_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('category_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_zh_name"><?php echo $model->getAttributeLabel('zh_name')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_zh_name" name="Brand[zh_name]" class="form-control" value="<?php echo CHtml::encode($model->zh_name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('zh_name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_en_name"><?php echo $model->getAttributeLabel('en_name')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_en_name" name="Brand[en_name]" class="form-control" value="<?php echo CHtml::encode($model->en_name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('en_name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_description"><?php echo $model->getAttributeLabel('description')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_description" name="Brand[description]" class="form-control" value="<?php echo CHtml::encode($model->description); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('description');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_logo"><?php echo $model->getAttributeLabel('logo')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_logo" name="Brand[logo]" class="form-control" value="<?php echo CHtml::encode($model->logo); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('logo');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_url"><?php echo $model->getAttributeLabel('url')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_url" name="Brand[url]" class="form-control" value="<?php echo CHtml::encode($model->url); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('url');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_creat_time"><?php echo $model->getAttributeLabel('creat_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_creat_time" name="Brand[creat_time]" class="form-control" value="<?php echo CHtml::encode($model->creat_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('creat_time');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_status" name="Brand[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Brand_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="Brand_sort" name="Brand[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
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

