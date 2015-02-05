<?php
/* @var $this CategoryController */
/* @var $model Category */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_name"><?php echo $model->getAttributeLabel('name')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_name" name="Category[name]" class="form-control" value="<?php echo CHtml::encode($model->name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_category_id"><?php echo $model->getAttributeLabel('category_id')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_category_id" name="Category[category_id]" class="form-control" value="<?php echo CHtml::encode($model->category_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('category_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_is_father"><?php echo $model->getAttributeLabel('is_father')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_is_father" name="Category[is_father]" class="form-control" value="<?php echo CHtml::encode($model->is_father); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_father');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_status" name="Category[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_sort" name="Category[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sort');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Category_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Category_creation_time" name="Category[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
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

