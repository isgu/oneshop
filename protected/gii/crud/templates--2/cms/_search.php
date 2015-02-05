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

<form action="<?php echo "<?php"; ?> echo $this->createUrl('index');?>" method="get" class="form-inline mt10">
<?php $count = 0; foreach($this->tableSchema->columns as $column){ $count++;?>
<?php
$field=$this->generateInputField($this->modelClass,$column);
if(strpos($field,'password')!==false)
	continue;
?>
	<?php if($count > 4){ echo '<!-- '; }?><div class="form-group">
		<input type="text" class="form-control input-sm" placeholder="<?php echo "<?php"; ?> echo $model->getAttributeLabel('<?php echo $column->name;?>')?>" name="<?php echo $this->modelClass;?>[<?php echo $column->name;?>]" value="<?php echo "<?php"; ?> echo CHtml::encode($model-><?php echo $column->name;?>); ?>" >
	</div><?php if($count > 4){ echo ' -->'; }?>

<?php } ?>
	<button type="submit" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-search"></span>搜索</button>
</form>
