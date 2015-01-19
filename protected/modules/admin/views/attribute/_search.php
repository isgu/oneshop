<?php
/* @var $this AttributeController */
/* @var $model Attribute */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="Attribute[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('name')?>" name="Attribute[name]" value="<?php echo CHtml::encode($model->name); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('category_id')?>" name="Attribute[category_id]" value="<?php echo CHtml::encode($model->category_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_alias')?>" name="Attribute[is_alias]" value="<?php echo CHtml::encode($model->is_alias); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_color')?>" name="Attribute[is_color]" value="<?php echo CHtml::encode($model->is_color); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_enu')?>" name="Attribute[is_enu]" value="<?php echo CHtml::encode($model->is_enu); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_input')?>" name="Attribute[is_input]" value="<?php echo CHtml::encode($model->is_input); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_crux')?>" name="Attribute[is_crux]" value="<?php echo CHtml::encode($model->is_crux); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_sale')?>" name="Attribute[is_sale]" value="<?php echo CHtml::encode($model->is_sale); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_search')?>" name="Attribute[is_search]" value="<?php echo CHtml::encode($model->is_search); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_must')?>" name="Attribute[is_must]" value="<?php echo CHtml::encode($model->is_must); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('is_choose')?>" name="Attribute[is_choose]" value="<?php echo CHtml::encode($model->is_choose); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="Attribute[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="Attribute[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creation_time')?>" name="Attribute[creation_time]" value="<?php echo CHtml::encode($model->creation_time); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
