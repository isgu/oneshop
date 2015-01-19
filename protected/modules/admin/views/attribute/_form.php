<?php
/* @var $this AttributeController */
/* @var $model Attribute */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_name"><?php echo $model->getAttributeLabel('name')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_name" name="Attribute[name]" class="form-control" value="<?php echo CHtml::encode($model->name); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('name');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_category_id"><?php echo $model->getAttributeLabel('category_id')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_category_id" name="Attribute[category_id]" class="form-control" value="<?php echo CHtml::encode($model->category_id); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('category_id');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_alias"><?php echo $model->getAttributeLabel('is_alias')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_alias" name="Attribute[is_alias]" class="form-control" value="<?php echo CHtml::encode($model->is_alias); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_alias');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_color"><?php echo $model->getAttributeLabel('is_color')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_color" name="Attribute[is_color]" class="form-control" value="<?php echo CHtml::encode($model->is_color); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_color');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_enu"><?php echo $model->getAttributeLabel('is_enu')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_enu" name="Attribute[is_enu]" class="form-control" value="<?php echo CHtml::encode($model->is_enu); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_enu');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_input"><?php echo $model->getAttributeLabel('is_input')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_input" name="Attribute[is_input]" class="form-control" value="<?php echo CHtml::encode($model->is_input); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_input');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_crux"><?php echo $model->getAttributeLabel('is_crux')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_crux" name="Attribute[is_crux]" class="form-control" value="<?php echo CHtml::encode($model->is_crux); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_crux');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_sale"><?php echo $model->getAttributeLabel('is_sale')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_sale" name="Attribute[is_sale]" class="form-control" value="<?php echo CHtml::encode($model->is_sale); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_sale');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_search"><?php echo $model->getAttributeLabel('is_search')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_search" name="Attribute[is_search]" class="form-control" value="<?php echo CHtml::encode($model->is_search); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_search');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_must"><?php echo $model->getAttributeLabel('is_must')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_must" name="Attribute[is_must]" class="form-control" value="<?php echo CHtml::encode($model->is_must); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_must');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_is_choose"><?php echo $model->getAttributeLabel('is_choose')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_is_choose" name="Attribute[is_choose]" class="form-control" value="<?php echo CHtml::encode($model->is_choose); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('is_choose');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_status"><?php echo $model->getAttributeLabel('status')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_status" name="Attribute[status]" class="form-control" value="<?php echo CHtml::encode($model->status); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('status');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_sort"><?php echo $model->getAttributeLabel('sort')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_sort" name="Attribute[sort]" class="form-control" value="<?php echo CHtml::encode($model->sort); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sort');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Attribute_creation_time"><?php echo $model->getAttributeLabel('creation_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Attribute_creation_time" name="Attribute[creation_time]" class="form-control" value="<?php echo CHtml::encode($model->creation_time); ?>">
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

