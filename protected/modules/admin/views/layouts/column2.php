<?php $this->beginContent('/layouts/main'); ?>

<div id="page-main" class="container-fluid">

	<div class="row">
		<div class="col-md-2 " >

			<?php
			if(empty($this->menuName)){
				$controller_id = Yii::app()->getController()->getId();
				$this->menuName = AdminMenu::model()->getMenuNameByController($controller_id);
			}
			
			$menus= AdminMenu::model()->getAdminMenu($this->menuName);

			if(count($menus)>0){ ?>

				<!--Yii-tree start-->
				<?php $this->widget('application.components.CRainTree', array(
					'data'=>$menus,
					'pid'=>$this->menuName  //system
				));?>
				<script>
					$(function(){
						//激活
						<?php if(!isset($this->navActive)){
							$this->navActive = 'admin.'.$this->getId().'.index';
						}?>
						var nodeId = "<?php echo $this->navActive?>";
						if(nodeId != ""){
							rain_tree_active(nodeId);
						}

					});
				</script>
				<!--Yii-tree end-->

			<?php }?>
		</div>

		<div class="col-md-10">
			<?php echo $content;?>
		</div>
	</div>

</div>

<?php $this->endContent(); ?>

