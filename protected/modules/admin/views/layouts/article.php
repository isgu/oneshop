<?php $this->beginContent('/layouts/main'); ?>

<div id="page-main" class="container-fluid">

	<div class="row">
		<div class="col-md-2" >

			<!--
			<ul class="nav nav-list nav-pills nav-stacked rain-tree">


				<li class="level-undefined"><a href="<?php echo $this->createUrl('menu/index')?>"><span class="glyphicon glyphicon-th-large"></span>栏目管理</a></li>
				<li class="level-undefined"><a href="<?php echo $this->createUrl('page/index')?>"><span class="glyphicon glyphicon-text-width"></span>单页管理</a></li>
				<li class="level-undefined"><a href="<?php echo $this->createUrl('category/index')?>"><span class="glyphicon glyphicon-list"></span>分类管理</a></li>

			</ul>-->


			<!--rain-tree start-->
			<?php $this->widget('application.components.CRainTree', array(
				'data'=>Category::model()->getTree(),
				'pid'=>0,
			));?>
			<script>
				$(function(){
					//激活
					<?php if(isset($this->currentNodeId)){ ?>
					var nodeId = "<?php echo  $this->currentNodeId?>";
					if(nodeId!=""){
						rain_tree_active(nodeId);

						//展开
						var li = $(".rain-tree>li[data-id='"+nodeId+"']");
						rain_tree_toggle(li,false);

					}
					<?php } ?>
				});
			</script>
			<!--rain-tree end-->

		</div>

		<div class="col-md-10">
			<?php echo $content;?>
		</div>
	</div>
</div>

<?php $this->endContent(); ?>

