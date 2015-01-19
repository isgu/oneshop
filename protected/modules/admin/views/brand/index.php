<?php
/* @var $this BrandController */
/* @var $model Brand */

//CActiveDataProvider
$dataProvider = $model->search();

$this->breadcrumbs=array(
	'Brands',
);
?>

<?php if(Yii::app()->user->hasFlash('message')){?>
	<div class="alert alert-<?php echo Yii::app()->user->getFlash('status');?> alert-dismissable">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<span><?php echo Yii::app()->user->getFlash('message');?></span>
	</div>
<?php } ?>

<div id="toolbar">
	<a class="btn btn-success btn-sm" href="<?php echo $this->createUrl('create')?>"><span class="glyphicon glyphicon-plus-sign"></span> 新建</a>
	<!--
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-edit blue"></span> 编辑</a>
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-ok green"></span> 发布</a>
	<a class="btn btn-default btn-sm rainTodo" href="#"><span class="glyphicon glyphicon-remove-sign red"></span> 取消发布</a>
	-->
	<a class="btn btn-default btn-sm rainTodo" data-confirm="确实要删除这些记录吗?" href="<?php echo $this->createUrl('delete')?>"><span class="glyphicon glyphicon-trash"></span> 批量删除</a>
</div>

<?php $this->renderPartial('_search',array('model'=>$model));?>

<div class="table-responsive">
	<table class="table table-hover table-striped mt10">
		<tr>
			<th><input type="checkbox" class="js-select-all" data-selector=":checkbox[name='id[]']" /></th>
			<th><?php echo $model->getAttributeLabel('id')?></th>
			<th><?php echo $model->getAttributeLabel('category_id')?></th>
			<th><?php echo $model->getAttributeLabel('zh_name')?></th>
			<th><?php echo $model->getAttributeLabel('en_name')?></th>
			<th><?php echo $model->getAttributeLabel('description')?></th>
			<th><?php echo $model->getAttributeLabel('logo')?></th>
			<th><?php echo $model->getAttributeLabel('url')?></th>
			<th><?php echo $model->getAttributeLabel('creat_time')?></th>
			<th><?php echo $model->getAttributeLabel('status')?></th>
			<th><?php echo $model->getAttributeLabel('sort')?></th>
			<th>操作</th>
		</tr>
		<?php foreach ($dataProvider->getData() as $item){ ?>
		<tr>
			<td><input name="id[]" value="<?php echo $item->id;?>" type="checkbox"/></td>
			<td><?php echo CHtml::encode($item->id); ?></td>
			<td><?php echo CHtml::encode($item->category_id); ?></td>
			<td><?php echo CHtml::encode($item->zh_name); ?></td>
			<td><?php echo CHtml::encode($item->en_name); ?></td>
			<td><?php echo CHtml::encode($item->description); ?></td>
			<td><?php echo CHtml::encode($item->logo); ?></td>
			<td><?php echo CHtml::encode($item->url); ?></td>
			<td><?php echo CHtml::encode($item->creat_time); ?></td>
			<td><?php echo CHtml::encode($item->status); ?></td>
			<td><?php echo CHtml::encode($item->sort); ?></td>
			<td>
				<?php echo CHtml::link(
				'<i class="glyphicon glyphicon-zoom-in"></i>',
				array('view','id'=>$item->id),
				array('title'=>'查看','class'=>'btn btn-default btn-sm')
				);?>
				<?php echo CHtml::link(
				'<i class="glyphicon glyphicon-edit blue"></i>',
				array('update','id'=>$item->id),
				array('title'=>'修改','class'=>'btn btn-default btn-sm')
				);?>
				<?php echo CHtml::link(
				'<i class="glyphicon glyphicon-trash"></i>',
				array('delete','id'=>$item->id),
				array('title'=>'删除','class'=>'btn btn-default btn-sm','onclick'=>'return confirm("确定要删除吗?")')
				);?>
			</td>
		</tr>
		<?php } ?>
	</table>
</div>
<div>
	<?php $this->widget('CLinkPager', array(
		'pages' => $dataProvider->pagination,
		//公共分页样式在配置文件中指定
	)) ?>
</div>