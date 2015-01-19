<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */
?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->getModelClass(); ?> */
?>

<form id="my_form" action="<?php echo "<?php"; ?> echo Yii::app()->request->getUrl();?>" method="post" class="form-horizontal">
<?php foreach($this->tableSchema->columns as $column){
	if($column->autoIncrement)
		continue;
?>

	<div class="form-group">
		<label class="col-md-2 control-label" for="<?php echo $this->getModelClass(); ?>_<?php echo $column->name;?>"><?php echo "<?php"; ?> echo $model->getAttributeLabel('<?php echo $column->name;?>')?></label>
		<div class="col-md-4">
			<input type="text" id="<?php echo $this->getModelClass(); ?>_<?php echo $column->name;?>" name="<?php echo $this->getModelClass(); ?>[<?php echo $column->name;?>]" class="form-control" value="<?php echo "<?php"; ?> echo CHtml::encode($model-><?php echo $column->name;?>); ?>">
		</div>
		<div class="col-md-6">
			<span class="error-message label label-warning"><?php echo "<?php"; ?> echo $model->getError('<?php echo $column->name;?>');?></span>
		</div>
	</div>

<?php }?>
	<div class="form-group">
		<div class="col-md-offset-2 col-md-10">
			<button type="submit" class="btn btn-primary"><?php echo "<?php echo \$model->isNewRecord ? '创建' : '保存 '; ?>\n"; ?></button>
			<button type="reset" class="btn">重置</button>
		</div>
	</div>
</form>

