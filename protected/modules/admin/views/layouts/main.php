<!DOCTYPE html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="">
	<title><?php echo CHtml::encode($this->pageTitle);?></title>
	<?php Yii::app()->clientScript->registerCoreScript('jquery');?>

	<link rel="stylesheet" href="<?php echo $this->module->assetsUrl;?>/bootstrap/css/bootstrap.css">
	<!--[if lt IE 9]>
	<script src="<?php echo $this->module->assetsUrl;?>/html5/html5shiv.min.js"></script>
	<script src="<?php echo $this->module->assetsUrl;?>/html5/respond.min.js"></script>
	<![endif]-->

	<script src="<?php echo $this->module->assetsUrl;?>/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="<?php echo $this->module->assetsUrl;?>/rainjs/rain-base.js"></script>
	<script type="text/javascript" src="<?php echo $this->module->assetsUrl;?>/rainjs/alert.js"></script>

	<style type="text/css">
		.mt10{margin-top: 10px;}
		.mt20{margin-top: 20px;}
		.container-fluid{padding: 0px 20px;}
		body{padding-top: 50px;}
		#page-main{min-height: 380px;}
		#page-footer{text-align:center;border-top:solid 1px #C9E0ED ;min-height: 110px;}

		.green{color:#47A447;}
		.blue{color:#428BCA;}
		.red{color:#D9534F;}
		.yellow{color:#FCF8E3}
		.bg-white{background-color: #fff;}

		/*工具条*/
		/*新建按扭*/
		#toolbar .btn-success {
			width: 148px;
		}

		/*左菜单边框和背景*/
		.left-menu{/*background:whitesmoke;border:1px solid lightgray;border-radius:5px;*/padding: 2px;min-height: 370px;}

		/*调整左则导航菜单的高度*/
		.left-menu > li > a{padding-top: 5px;padding-bottom: 5px;padding-left: 10px;padding-right: 0px;}

	</style>
	<script type="text/javascript">
		var BASE_URL 	= "<?php echo Yii::app()->params['baseUrl'];?>/";
	</script>
</head>
<body>


<!-- Static navbar -->
<div class="navbar navbar-default navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand">
				<!--<i class="glyphicon glyphicon-tint blue"></i>-->
				<img src="<?php echo Yii::app()->params['baseUrl'].'/images/back_logo.png';?>" height="24">
			<span class="blue">英鹏科技</span></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php echo $this->createUrl('default/index')?>">网站管理</a></li>
				<?php $menus= AdminMenu::model()->getAdminMenu();?>
				<?php if(!empty($menus['member'])):?>
					<li><a href="<?php echo $this->createUrl('member/index');?>">会员管理</a></li>
                <?php endif;?>
				<?php if(!empty($menus['user'])):?>
					<li class="<?php if($this->navActive =='用户'){echo 'active';}?>">
						<a href="<?php echo $this->createUrl('user/index')?>" >后台用户</a>
					</li>
                <?php endif;?>

			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li><a target="_blank" href="<?php echo Yii::app()->baseUrl;?>/">网站首页 <b class="glyphicon glyphicon-new-window small"></b></a></li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-cog"></i> <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li><a><?php echo Yii::app()->user->name?></a></li>
						<li class="divider"></li>
						<li><a href="<?php echo $this->createUrl('user/profile')?>">个人中心</a></li>
						<li class="divider"></li>
						<li><a href="<?php echo Yii::app()->createUrl('admin/default/logout');?>">注销</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>


<div class="container-fluid" style="padding: 0px;">
	<div  class="col-md-12" style="padding: 0px;">
		<!-- breadcrumbs -->
		<?php if(isset($this->breadcrumbs)):?>
			<?php $this->widget('zii.widgets.CBreadcrumbs', array(
				'links'=>$this->breadcrumbs, //array
				'separator'=>'',
				'homeLink'=>'<li>'.CHtml::link('首页',$this->createUrl('default/index')).'</li>',
				'activeLinkTemplate'=>'<li><a href="{url}">{label}</a></li>',
				'inactiveLinkTemplate'=>'<li class="active">{label}</li>',
				'htmlOptions'=>array('class'=>'breadcrumb'),
			)); ?><!-- breadcrumbs -->
		<?php endif?>
	</div>
</div>
<?php echo $content;?>
<div class="container-fluid">
	<div class="row">
		<div id="page-footer"  class="clo-md-12">
			Copyright &copy; <?php echo @date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			Powered by <a target="_blank" href="http://www.yiiframework.com/">Yii Framework</a>.
		</div><!-- page-footer -->
	</div>
</div>
<script>
	setInterval(function(){
		$.ajax({
			url:"<?php echo $this->createUrl('notice/unreadNum');?>",
			success:function(data){
				$('.inbox_num').html(data);
				if(parseInt(data) > 0){$('.inbox_num').css('color','orangered');}
			}
		})
	},20000);
	$("#task").parent().mouseover(function(){
		$("#task").next().show();
	})
	$("#task").parent().mouseleave(function(){
		$("#task").next().hide();
	})
</script>
</body>
</html>
