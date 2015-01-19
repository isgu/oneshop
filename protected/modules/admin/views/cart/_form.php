<?php
/* @var $this CartController */
/* @var $model Cart */
?>

<form id="my_form" action="<?php echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">

	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_uid"><?php echo $model->getAttributeLabel('uid')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_uid" name="Cart[uid]" class="form-control" value="<?php echo CHtml::encode($model->uid); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('uid');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_iid"><?php echo $model->getAttributeLabel('iid')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_iid" name="Cart[iid]" class="form-control" value="<?php echo CHtml::encode($model->iid); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('iid');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_title"><?php echo $model->getAttributeLabel('title')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_title" name="Cart[title]" class="form-control" value="<?php echo CHtml::encode($model->title); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('title');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_thumb"><?php echo $model->getAttributeLabel('thumb')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_thumb" name="Cart[thumb]" class="form-control" value="<?php echo CHtml::encode($model->thumb); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('thumb');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_amount"><?php echo $model->getAttributeLabel('amount')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_amount" name="Cart[amount]" class="form-control" value="<?php echo CHtml::encode($model->amount); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('amount');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_count"><?php echo $model->getAttributeLabel('count')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_count" name="Cart[count]" class="form-control" value="<?php echo CHtml::encode($model->count); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('count');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_add_time"><?php echo $model->getAttributeLabel('add_time')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_add_time" name="Cart[add_time]" class="form-control" value="<?php echo CHtml::encode($model->add_time); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('add_time');?></span>
		</div>
	</div>


	<div class="form-group">
		<label class="col-md-2 control-label" for="Cart_sku"><?php echo $model->getAttributeLabel('sku')?></label>
		<div class="col-md-4">
			<input type="text" id="Cart_sku" name="Cart[sku]" class="form-control" value="<?php echo CHtml::encode($model->sku); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo $model->getError('sku');?></span>
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

