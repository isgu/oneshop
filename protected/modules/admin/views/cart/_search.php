<?php
/* @var $this CartController */
/* @var $model Cart */
?>

<form action="<?php echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('id')?>" name="Cart[id]" value="<?php echo CHtml::encode($model->id); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('uid')?>" name="Cart[uid]" value="<?php echo CHtml::encode($model->uid); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('iid')?>" name="Cart[iid]" value="<?php echo CHtml::encode($model->iid); ?>" >
	</div>
	<div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('title')?>" name="Cart[title]" value="<?php echo CHtml::encode($model->title); ?>" >
	</div>
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('thumb')?>" name="Cart[thumb]" value="<?php echo CHtml::encode($model->thumb); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('amount')?>" name="Cart[amount]" value="<?php echo CHtml::encode($model->amount); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('count')?>" name="Cart[count]" value="<?php echo CHtml::encode($model->count); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('add_time')?>" name="Cart[add_time]" value="<?php echo CHtml::encode($model->add_time); ?>" >
	</div> -->
	<!-- <div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo $model->getAttributeLabel('sku')?>" name="Cart[sku]" value="<?php echo CHtml::encode($model->sku); ?>" >
	</div> -->
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
