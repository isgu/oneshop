<?php
/* @var $this CategoryController */
/* @var $model Category */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="Category[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('name')?>" name="Category[name]" value="<?php echo CHtml::encode($model->name); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('category_id')?>" name="Category[category_id]" value="<?php echo CHtml::encode($model->category_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_father')?>" name="Category[is_father]" value="<?php echo CHtml::encode($model->is_father); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="Category[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="Category[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="Category[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
