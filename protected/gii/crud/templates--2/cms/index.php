<?php
/**
 * The following variables are available in this template:
 * - $this: the CrudCode object
 */

$model = new $this->modelClass;
$id = $model->getMetaData()->tableSchema->primaryKey;

?>
<?php echo "<?php\n"; ?>
/* @var $this <?php echo $this->getControllerClass(); ?> */
/* @var $model <?php echo $this->modelClass; ?> */

//CActiveDataProvider
$dataProvider = $model->search();

<?php
$label=$this->pluralize($this->class2name($this->modelClass));
echo "\$this->breadcrumbs=array(
	'$label',
);\n";
?>
?>

<?php echo "<?php"?> if(Yii::app()->user->hasFlash('message')){?>
	<div class="alert alert-<?php echo "<?php"?> echo Yii::app()->user->getFlash('status');?> alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span><?php echo "<?php"?> echo Yii::app()->user->getFlash('message');?></span>
	</div>
<?php echo "<?php"?> } ?>

<div id="toolbar">
	<a class="btn btn-success btn-sm" href="<?php echo "<?php"?> echo $this->createUrl('create')?>"><span class="glyphicon glyphicon-plus-sign"></span> 新建</a>
	<!--
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-edit blue"></span> 编辑</a>
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-ok green"></span> 发布</a>
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-remove-sign red"></span> 取消发布</a>
	-->
	<a class="btn btn-default btn-sm rainTodo" data-confirm="确实要删除这些记录吗?" href="<?php echo "<?php"?> echo $this->createUrl('delete')?>"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
</div>

<?php echo "<?php"?> $this->renderPartial('_search',array('model'=>$model));?>

<div class="table-responsive">
	<table class="table table-hover table-striped mt10">
		<tr>
			<th><input type="checkbox" class="js-select-all" data-selector=":checkbox[name='id[]']" /></th>
			<th><?php echo "<?php"?> echo $model->getAttributeLabel('<?php echo $id;?>')?></th>
<?php foreach($model->getMetaData()->columns as $v){
				if(!$v->isPrimaryKey){?>
			<th><?php echo "<?php"?> echo $model->getAttributeLabel('<?php echo $v->name;?>')?></th>
<?php }}?>
			<th>操作</th>
		</tr>
		<?php echo "<?php"?> foreach ($dataProvider->getData() as $item){ ?>
		<tr>
			<td><input name="id[]" value="<?php echo "<?php"?> echo $item-><?php echo $id;?>;?>" type="checkbox"/></td>
			<td><?php echo "<?php"?> echo CHtml::encode($item-><?php echo $id;?>); ?></td>
<?php foreach($model->getMetaData()->columns as $v){
			if(!$v->isPrimaryKey){?>
			<td><?php echo "<?php"?> echo CHtml::encode($item-><?php echo $v->name;?>); ?></td>
<?php } }?>
			<td>
				<?php echo "<?php"?> echo CHtml::link(
				'<i class="glyphicon glyphicon-zoom-in"></i>',
				array('view','id'=>$item-><?php echo $id;?>),
				array('title'=>'查看','class'=>'btn btn-default btn-sm')
				);?>
				<?php echo "<?php"?> echo CHtml::link(
				'<i class="glyphicon glyphicon-edit blue"></i>',
				array('update','id'=>$item-><?php echo $id;?>),
				array('title'=>'修改','class'=>'btn btn-default btn-sm')
				);?>
				<?php echo "<?php"?> echo CHtml::link(
				'<i class="glyphicon glyphicon-trash"></i>',
				array('delete','id'=>$item-><?php echo $id;?>),
				array('title'=>'删除','class'=>'btn btn-default btn-sm','onclick'=>'return confirm("确定要删除吗?")')
				);?>
			</td>
		</tr>
		<?php echo "<?php"?> } ?>
	</table>
</div>
<div>
	<?php echo "<?php"; ?> $this->widget('CLinkPager', array(
		'pages' => $dataProvider->pagination,
		//公共分页样式在配置文件中指定
	)) ?>
</div>