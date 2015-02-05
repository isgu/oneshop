<?php
/* @var $this AttributeValueController */
/* @var $model AttributeValue */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_name"><?php echo $model->getAttributeLabel('name')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_name" name="AttributeValue[name]" class="form-control" value="<?php echo CHtml::encode($model->name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_attribute_id"><?php echo $model->getAttributeLabel('attribute_id')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_attribute_id" name="AttributeValue[attribute_id]" class="form-control" value="<?php echo CHtml::encode($model->attribute_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('attribute_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_status" name="AttributeValue[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_sort" name="AttributeValue[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sort');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_category_id"><?php echo $model->getAttributeLabel('category_id')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_category_id" name="AttributeValue[category_id]" class="form-control" value="<?php echo CHtml::encode($model->category_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('category_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="AttributeValue_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="AttributeValue_creation_time" name="AttributeValue[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
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

