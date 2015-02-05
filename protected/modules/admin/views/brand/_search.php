<?php
/* @var $this BrandController */
/* @var $model Brand */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="Brand[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('category_id')?>" name="Brand[category_id]" value="<?php echo CHtml::encode($model->category_id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('zh_name')?>" name="Brand[zh_name]" value="<?php echo CHtml::encode($model->zh_name); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('en_name')?>" name="Brand[en_name]" value="<?php echo CHtml::encode($model->en_name); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('description')?>" name="Brand[description]" value="<?php echo CHtml::encode($model->description); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('logo')?>" name="Brand[logo]" value="<?php echo CHtml::encode($model->logo); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('url')?>" name="Brand[url]" value="<?php echo CHtml::encode($model->url); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('creat_time')?>" name="Brand[creat_time]" value="<?php echo CHtml::encode($model->creat_time); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('status')?>" name="Brand[status]" value="<?php echo CHtml::encode($model->status); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sort')?>" name="Brand[sort]" value="<?php echo CHtml::encode($model->sort); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
