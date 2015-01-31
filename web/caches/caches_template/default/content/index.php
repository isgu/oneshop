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
            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=aa7ab664f287c487c39c6814ad42c50c&action=lists&catid=26&thumb=1&num=9&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'26','thumb'=>'1','order'=>'listorder ASC','limit'=>'9',));}?>
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
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12a5abdb991063ce215650f1b02b951e&action=position&posid=18&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','limit'=>'4',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li> 
                        <div class="pic">
                            <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>" alt="<?php echo $r['title'];?>" width="120px" ><i></i></a>
                        </div>
                        <div class="name">
                            <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a>
                        </div>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
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

<?php include template("content","footer"); ?>
