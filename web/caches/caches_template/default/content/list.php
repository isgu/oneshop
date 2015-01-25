<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<!--news-->
    <div class="news news_c">
        <div class="tit wrap">热点新闻</div>
        <div class="idx_part1 cf">
            <div class="wrap">
                <ul>
                <?php $i=1?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"get\" data=\"op=get&tag_md5=4cd4f708791d8bbe07bf5a82fe9dff52&sql=select+%2A+from+ttx_poster+where+spaceid%3D%2712%27&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}pc_base::load_sys_class("get_model", "model", 0);$get_db = new get_model();$r = $get_db->sql_query("select * from ttx_poster where spaceid='12' LIMIT 4");while(($s = $get_db->fetch_next()) != false) {$a[] = $s;}$data = $a;unset($a);?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <?php $array = string2array($r['setting']); ?>
                    <li <?php if($i==1) { ?> class="first" <?php } ?>>
                        <h1><a href="<?php echo $array['1']['linkurl'];?>" target="_blank"><?php echo $array['1']['alt'];?></a></h1>
                        <p><?php echo $r['name'];?></p>
                        <div class="pic">
                            <a href="<?php echo $array['1']['linkurl'];?>" target="_blank">
                                <img src="<?php echo $array['1']['imageurl'];?>" alt="<?php echo $array['1']['alt'];?>"/>
                            </a>
                        </div>
                    </li>
                <?php $i++; ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
        </div>
        <!--end-->
        <div class="wrap">
            <div class="news_list cf">
                <div class="list_tit cf">
                    <ul>
                        <li <?php if($_GET['catid']==12) { ?> class="active" <?php } ?>><a href="<?php echo $CATEGORYS['12']['url'];?>">全部新闻</a></li>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=afada71fc9586de71874222ecba0f5ca&action=category&catid=12&num=25&siteid=%24siteid&order=listorder+ASC&return=newsTitle\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$newsTitle = $content_tag->category(array('catid'=>'12','siteid'=>$siteid,'order'=>'listorder ASC','limit'=>'25',));}?>
                    <?php $n=1;if(is_array($newsTitle)) foreach($newsTitle AS $r) { ?>
                        <li <?php if($_GET['catid']==$r['catid']) { ?> class="active" <?php } ?>><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                    </ul>
                </div>
                <div class="con cf">
                    <ul>
                        <li class="active">
                            <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=c52c16cc13017d90ba7db74d3ea01550&action=lists&catid=%24catid&num=20&order=id+DESC&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 20;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$catid,'order'=>'id DESC','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
                            <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                            <div class="rows">
                                <h1><a href="<?php echo $r['url'];?>" target="_blank" alt=""><?php echo $r['title'];?></a></h1>
                                <div class="time">2014年12月6日</div>
                                <div class="txt">
                                    <?php echo str_cut($r['description'] , 500 , '...' );?><a href="<?php echo $r['url'];?>" class="more">查看更多</a>
                                </div>
                            </div>
                            <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                            <?php $n++;}unset($n); ?>
                        </li>  
                       
                    </ul>
                </div>
            </div>
        </div>
        <div class="page">
            <?php echo $pages;?>
        </div>
    </div>
    
    <!--news end-->
<?php include template("content","footer"); ?>
