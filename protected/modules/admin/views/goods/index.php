<?php
/* @var $this GoodsController */
/* @var $model Goods */

//CActiveDataProvider
$dataProvider = $model->search();

$this->breadcrumbs=array(
	'Goods',
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
			<th><?php echo $model->getAttributeLabel('name')?></th>
			<th><?php echo $model->getAttributeLabel('brand_id')?></th>
			<th><?php echo $model->getAttributeLabel('view_price')?></th>
			<th><?php echo $model->getAttributeLabel('status')?></th>
			<th><?php echo $model->getAttributeLabel('sort')?></th>
			<th><?php echo $model->getAttributeLabel('creation_time')?></th>
			<th><?php echo $model->getAttributeLabel('update_time')?></th>
			<th>操作</th>
		</tr>
		<?php foreach ($dataProvider->getData() as $item){ ?>
		<tr>
			<td><input name="id[]" value="<?php echo $item->id;?>" type="checkbox"/></td>
			<td><?php echo CHtml::encode($item->id); ?></td>
			<td><?php echo CHtml::encode($item->name); ?></td>
			<td><?php echo CHtml::encode($item->brand_id); ?></td>
			<td><?php echo CHtml::encode($item->view_price); ?></td>
			<td><?php echo CHtml::encode($item->status); ?></td>
			<td><?php echo CHtml::encode($item->sort); ?></td>
			<td><?php echo CHtml::encode( date('Y-m-d H:i:s', $item->creation_time) ); ?></td>
			<td><?php echo CHtml::encode( date('Y-m-d H:i:s',$item->update_time) ); ?></td>
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