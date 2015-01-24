<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<div class="slide">
    <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=d1747d0353c3aa334e1da8c03aadb1fb&sql=select+%2A+from+ttx_poster+where+spaceid%3D11\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ttx_poster where spaceid=11 LIMIT 20");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php $imgArray = string2array($r['setting']); ?>
        <li style="background-image:url(<?php echo $imgArray[1]['imageurl'] ?>)"></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
</div>
<!-- banner结束 -->
<div class="idx_part1 cf">
    <div class="wrap">
        <ul>
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4cd4f708791d8bbe07bf5a82fe9dff52&sql=select+%2A+from+ttx_poster+where+spaceid%3D%2712%27&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ttx_poster where spaceid='12' LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
        <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
        <?php $array = string2array($r['setting']); ?>
            <li class="first">
                <h1><a href="<?php echo $array['1']['linkurl'];?>" target="_blank"><?php echo $array['1']['alt'];?></a></h1>
                <p><?php echo $r['name'];?></p>
                <div class="pic">
                    <a href="<?php echo $array['1']['linkurl'];?>" target="_blank">
                        <img src="<?php echo $array['1']['imageurl'];?>" alt="<?php echo $array['1']['alt'];?>"/>
                    </a>
                </div>
            </li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </ul>
    </div>
</div>
 <div class="pf_function cf">
    <div class="wrap">
        <div class="tit">3G/4G车载视频监控平台功能及更新</div>
        <div class="list">
            <ul>
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2dd07d0c7214688924623c39e78a80af&action=lists&catid=26&thumb=1&num=9\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','thumb'=>'1','limit'=>'9',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <li>
                    <div class="pic">
                        <a href="" target="_blank">
                            <img src="<?php echo $r['thumb'];?>"/>
                        </a>
                    </div>
                    <h1><a href="<?php echo $r['url'];?>"><?php echo $r['title'];?></a><?php if($r['show_new']) { ?><img src="<?php echo IMG_PATH;?>/index/new.png"/><?php } ?></h1>
                    <div class="txt"><?php echo $r['description'];?></div>
                    <div class="mess">
                        最近更新：<span class="time"><?php echo date('Y-m-d H:i:s',$r['updatetime']);?></span>
                        <span class="version">V6.12</span>
                    </div>
                    <p><a href="<?php echo $r['url'];?>">查看详情</a><p>
                </li>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>    
            </ul>
        </div>
    </div>
</div>
    <!--idx_part3-->
    <div class="idx_part3 cf">
        <div class="wrap">
            <div class="news fl">
                <div class="tit cf">
                    <ul class="fl">
                    <?php $i=1?>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=afada71fc9586de71874222ecba0f5ca&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC&return=newsTitle\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$newsTitle = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($newsTitle)) foreach($newsTitle AS $r) { ?>
                        <li <?php if($i==1) { ?> class="active" <?php } ?>><?php echo $r['catname'];?></li>
                        <?php $i++; ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                    <a href="<?php echo $CATEGORYS['12']['url'];?>" class="more fr">查看更多</a>
                </div>
                <div class="con">
                    <ul>
                        <?php $i=1?>
                        <?php $n=1; if(is_array($newsTitle)) foreach($newsTitle AS $k => $v) { ?>
                        <li <?php if($i==1) { ?> class="active" <?php } ?>>
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=afe7854fdcafbc9fb42dd478c3d9aeef&action=lists&catid=%24v%5Bcatid%5D&num=8&order=id+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'order'=>'id DESC','limit'=>'8',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <dl>
                                <dt><em></em><a href="<?php echo $r['url'];?>" target="blank"><?php echo $r['title'];?></a></dt>
                                <dd><?php echo date('Y-m-d',$r['updatetime']);?></dd>
                            </dl>
                             <?php $n++;}unset($n); ?>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>  
                        </li>
                        <?php $i++; ?>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
            </div>
            <div class="product">
                <div class="tit">应用产品</div>
                <ul>
                    <li> 
                        <div class="pic">
                            <a href="" target="_blank"><img src="<?php echo IMG_PATH;?>/index/part3_1.png" alt="车载录像机" width="120px" ><i></i></a>
                        </div>
                        <div class="name">
                            <a href="" target="_blank">车载录像机</a>
                        </div>
                    </li>
                    <li> 
                        <div class="pic">
                            <a href="" target="_blank"><img src="<?php echo IMG_PATH;?>/index/part3_2.png" alt="单兵录像执法设备"  width="150px" height="114px;"><i></i></a>
                        </div>
                        <div class="name">
                            <a href="" target="_blank">单兵录像执法设备</a>
                        </div>
                    </li>
                    <li> 
                        <div class="pic">
                            <a href="" target="_blank"><img src="<?php echo IMG_PATH;?>/index/part3_3.png" alt="网络摄像机"  width="150px" height="114px;"><i></i></a>
                        </div>
                        <div class="name">
                            <a href="" target="_blank">网络摄像机</a>
                        </div>
                    </li>
                    <li> 
                        <div class="pic">
                            <a href="" target="_blank"><img src="<?php echo IMG_PATH;?>/index/part3_4.png" alt="行驶记录仪"  width="150px" height="114px;"><i></i></a>
                        </div>
                        <div class="name">
                            <a href="" target="_blank">行驶记录仪</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--idx_part3 end-->
    <!--专业团队 联系我们 idx_part4-->
    <div class="idx_part4 cf">
        <div class="wrap">
            <div class="contact_mes">
                <h1>VIP服务品质 专业团购</h1>
                <div class="phone"><em></em>0755-86539820</div>
                <div class="info">
                    <div class="left fl">
                        <img src="<?php echo IMG_PATH;?>/QR.jpg" alt="二维码" width="108px"/>
                        <p>通天星微信平台</p>
                    </div>
                    <div class="right">
                        <div class="rows fax">
                            <i></i> 0755-86539820
                        </div>
                        <div class="rows email">
                            <i></i> afu@g-sky.cn
                        </div>
                        <div class="rows qq">
                            <i></i> 491613940
                        </div>
                        <div class="rows addr">
                            <i></i> 深圳市南山区科技园科苑北路坚达大厦10号608
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!--专业团队 联系我们 end-->

<!--main-->
<div class="main" style="display:none;">
	<div class="col-left">
    	<div class="news-hot">
        	<div class="content">
        	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=79d92623a8337007f1f3bcdd35d5f304&action=position&posid=2&order=listorder+DESC&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'2','order'=>'listorder DESC','limit'=>'4',));}?>
        	 <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <h4 class="blue"><a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],36,'');?></a></h4>
                <p><?php if($n==1) { ?><img src="<?php echo thumb($r[thumb],90,60);?>" width="90" height="60"/><?php } ?><?php echo str_cut($r[description],112);?></p>
                <div class="bk20 hr"><hr /></div>
               <?php $n++;}unset($n); ?>  
             <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>   
            </div>
        </div>
        <div class="slide">
            <div class="FocusPic">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=dcd1c47627b910509414b85662be50cc&action=position&posid=1&order=listorder+DESC&thumb=1&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'1','order'=>'listorder DESC','thumb'=>'1','limit'=>'5',));}?>
            	<div class="content" id="main-slide">
                    <div class="changeDiv">  
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                        <a href="<?php echo $r['url'];?>" title="<?php echo str_cut($r['title'],30);?>"><img src="<?php echo thumb($r['thumb'],310,260);?>" alt="<?php echo $r['title'];?>" width="310" height="260" /></a>
                    <?php $n++;}unset($n); ?>
                    </div>
                </div>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
            <div class="bk10"></div>
        	<div class="box extend">
            	<div class="col-left">争议</div>
                <div class="col-auto">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"block\" data=\"op=block&tag_md5=62e5ac893abc3866a6bda2553c0a156a&pos=index_block_1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">添加碎片</a>";}$block_tag = pc_base::load_app_class('block_tag', 'block');echo $block_tag->pc_tag(array('pos'=>'index_block_1',));?><?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</div>
                <script language="javascript" src="<?php echo APP_PATH;?>caches/poster_js/10.js"></script>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        		<h5>图片新闻</h5>
          <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2d4b9e3c7c2cc4bd0cec8b1fac9ae764&action=position&posid=12&thumb=1&order=listorder+DESC&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'12','thumb'=>'1','order'=>'listorder DESC','limit'=>'10',));}?>
            <ul class="content news-photo picbig">
             <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<li>
                    <div class="img-wrap">
                        <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><img src="<?php echo thumb($r[thumb],110,0);?>" title="<?php echo $r['title'];?>"/></a>
                    </div>
                    <a href="<?php echo $r['url'];?>" title="<?php echo $r['title'];?>"><?php echo str_cut($r[title],20);?></a>
                </li>
                <?php $n++;}unset($n); ?>
            </ul>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
        </div>
        <div class="bk10"></div>
        <?php $n=1;if(is_array(subcat(0,0,0,$siteid))) foreach(subcat(0,0,0,$siteid) AS $r) { ?>
        <?php $num++?>
        <div class="box cat-area" <?php if($num%2!=0) { ?>style=" margin-right:10px"<?php } ?>>
        		<h5 class="title-1"><?php echo $r['catname'];?><a href="<?php echo $r['url'];?>" class="more">更多>></a></h5>
             <div class="content">
             <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=ef41dd2190feee94486d0264e7354ef2&action=lists&catid=%24r%5Bcatid%5D&order=updatetime+DESC&thumb=1&num=1&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'updatetime DESC','thumb'=>'1','limit'=>'1',));}?>
             <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
             	<p>
             		<img src="<?php echo thumb($v[thumb],90,0);?>" width="90" height="60"/>
                    <strong><a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],28);?></a></strong><br /><?php echo str_cut($v['description'],100);?>
                </p>
              <?php $n++;}unset($n); ?>
              <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>                
                <div class="bk15 hr"></div>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=d9a5a0d61f080dbce4b2774d783edd34&action=lists&catid=%24r%5Bcatid%5D&num=5&order=id+DESC&return=info\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$info = $content_tag->lists(array('catid'=>$r[catid],'order'=>'id DESC','limit'=>'5',));}?>

                <ul class="list lh24 f14">
                <?php $n=1;if(is_array($info)) foreach($info AS $v) { ?>
                	<li>·<a href="<?php echo $v['url'];?>" target="_blank" title="<?php echo $v['title'];?>"<?php echo title_style($v[style]);?>><?php echo str_cut($v['title'],40);?></a></li>
                <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <?php if($num%2==0) { ?><div class="bk10"></div><?php } ?>
		<?php $n++;}unset($n); ?>
    </div>
    <div class="col-auto">
    	<div class="box">
        	 <h5 class="title-2">公告<a href="" class="more">&nbsp;</a></h5>
             <div class="content">
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"announce\" data=\"op=announce&tag_md5=54b0fffbbaac31bf6b88d6a6b5be8f2c&action=lists&siteid=%24siteid&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$announce_tag = pc_base::load_app_class("announce_tag", "announce");if (method_exists($announce_tag, 'lists')) {$data = $announce_tag->lists(array('siteid'=>$siteid,'limit'=>'2',));}?>
                <ul class="list lh24 f14">
                   <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                     <li> <a href="<?php echo APP_PATH;?>index.php?m=announce&c=index&a=show&aid=<?php echo $r['aid'];?>"><?php echo $r['title'];?></a></li>
                   <?php $n++;}unset($n); ?>
                </ul>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
        	<h5 class="title-2">专题<a href="<?php echo APP_PATH;?>index.php?m=special&c=index&a=special&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
            <div class="content special">
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"special\" data=\"op=special&tag_md5=d0da2a95c4fd410d9fde0a59d59f48fc&action=lists&siteid=%24siteid&elite=1&listorder=3&num=2\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$special_tag = pc_base::load_app_class("special_tag", "special");if (method_exists($special_tag, 'lists')) {$data = $special_tag->lists(array('siteid'=>$siteid,'elite'=>'1','listorder'=>'3','limit'=>'2',));}?>
            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
            	<?php if($n!=1) { ?><div class="hr bk15"></div><?php } ?>
                <p style="margin:0">
             		<a href="<?php echo $r['url'];?>"><img src="<?php echo $r['thumb'];?>" width="90" height="70" /></a>
                    <strong><a href="<?php echo $r['url'];?>"><?php echo str_cut($r[title],'18');?></a></strong><br /><?php echo str_cut($r['description'],50);?>
                </p>
            <?php $n++;}unset($n); ?>
            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </div>
        </div>
        <div class="bk10"></div>
        <div class="box">
            <h5 class="title-2"><span class="rt fn f12 tab SwapTab"><span class="fb">热点</span> | <span >评论</span> | <span>关注</span></span>排行</h5>
            <div class="tab-content">
            <ul class="content digg">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank" title="<?php echo $r['title'];?>"<?php echo title_style($r[style]);?>><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"comment\" data=\"op=comment&tag_md5=55e75bfad540869982aca092575756e4&action=bang&num=10&cache=3600\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$tag_cache_name = md5(implode('&',array()).'55e75bfad540869982aca092575756e4');if(!$data = tpl_cache($tag_cache_name,3600)){$comment_tag = pc_base::load_app_class("comment_tag", "comment");if (method_exists($comment_tag, 'bang')) {$data = $comment_tag->bang(array('limit'=>'10',));}if(!empty($data)){setcache($tag_cache_name, $data, 'tpl_data');}}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            <ul class="content digg hidden">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=97849c6fb7d3e0f9a0891295340b6456&action=hits&catid=6&num=10&order=views+DESC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'hits')) {$data = $content_tag->hits(array('catid'=>'6','order'=>'views DESC','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<li><a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
            </ul>
            </div>
        </div><div class="bk10"></div>
        <div class="box">
            <h5 class="title-2">调查问卷<a href="<?php echo APP_PATH;?>index.php?m=vote&c=index&siteid=<?php echo $siteid;?>" class="more">更多>></a></h5>
 
<script language="javascript" src="<?php echo APP_PATH;?>index.php?m=vote&c=index&a=show&action=js&subjectid=1&type=3"></script>
        </div>
    </div>
    <div class="bk10"></div>
	
	<div class="box blogroll ylink">
    	<h5><a href="<?php echo APP_PATH;?>index.php?m=link&siteid=<?php echo $siteid;?>" hidefocus="true" class="rt">更多>></a>友情链接<a href="<?php echo APP_PATH;?>index.php?m=link&c=index&a=register&siteid=<?php echo $siteid;?>" class="red">申请链接</a></h5>
        <div class="bk10"></div>
	<ul class="colli imgul">
        <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=80574ec69aa2a6c10ed30f7c49e0eda7&action=type_list&siteid=%24siteid&linktype=1&order=listorder+DESC&num=8&return=pic_link\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$pic_link = $link_tag->type_list(array('siteid'=>$siteid,'linktype'=>'1','order'=>'listorder DESC','limit'=>'8',));}?>
        <?php $n=1;if(is_array($pic_link)) foreach($pic_link AS $v) { ?>
        <li><a href="<?php echo $v['url'];?>" title="<?php echo $v['name'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" /></a></li>
        <?php $n++;}unset($n); ?>
        <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
    </ul>
     <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"link\" data=\"op=link&tag_md5=99c32cd273c57223c20074bf5196e97a&action=type_list&siteid=%24siteid&order=listorder+DESC&num=10&return=dat\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$link_tag = pc_base::load_app_class("link_tag", "link");if (method_exists($link_tag, 'type_list')) {$dat = $link_tag->type_list(array('siteid'=>$siteid,'order'=>'listorder DESC','limit'=>'10',));}?>
     <div class="bk10"></div>
	<div class="linka">
		<?php $n=1;if(is_array($dat)) foreach($dat AS $v) { ?>
              <?php if($type==0) { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['name'];?></a> |
              <?php } else { ?>
              <a href="<?php echo $v['url'];?>" target="_blank"><img src="<?php echo $v['logo'];?>" width="88" height="31" style="border: 1px solid #FFBE7A;"></a> 
              <?php } ?>
		<?php $n++;}unset($n); ?>
 	</div>
	<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
</div>
</div>
<script type="text/javascript"> 
$(function(){
	new slide("#main-slide","cur",310,260,1);//焦点图
	new SwapTab(".SwapTab","span",".tab-content","ul","fb");//排行TAB
})
</script>
<?php include template("content","footer"); ?>
