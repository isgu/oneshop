<?php
/* @var $this AttributeValueController */
/* @var $model AttributeValue */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="AttributeValue[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('name')?>" name="AttributeValue[name]" value="<?php echo CHtml::encode($model->name); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('attribute_id')?>" name="AttributeValue[attribute_id]" value="<?php echo CHtml::encode($model->attribute_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="AttributeValue[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="AttributeValue[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('category_id')?>" name="AttributeValue[category_id]" value="<?php echo CHtml::encode($model->category_id); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="AttributeValue[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
