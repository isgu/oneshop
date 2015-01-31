<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
<?php 
if(!$datas){
$db = pc_base::load_model('content_model');
            $db->set_model(12); //模型id  
            $catid = 27;
            $where = 'catid= ' . $catid . '';
            $where .= " AND `title` like '%".$_GET['title']."%'";
            $datas = $db->listinfo($where,'id desc',$_GET['page'] , 2);
            $pages = $db->pages;
            // var_dump($datas);exit;
}
?>
<div class="pro_application">
        <div class="wrap pro_appl_com">
            <div class="type">
                <ul class="cf">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=12a5abdb991063ce215650f1b02b951e&action=position&posid=18&num=4\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'position')) {$data = $content_tag->position(array('posid'=>'18','limit'=>'4',));}?>
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <li>
                        <a href="<?php echo $r['url'];?>">
                            <div class="pic">
                                <img src="<?php echo $r['thumb'];?>"/>
                                <p><?php echo $r['title'];?></p>
                            </div>
                        </a>
                    </li>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="type_info">
                <ul class="type_info_ul">
                    <li class="active">
                        <div class="top cf">
                            <div class="pro_type fl">
                                <div class="rows">
                                    <div class="left fl">产品类别：</div>
                                    <div class="right">
                                        <a href="javascript:;">SD车载录像机     </a>
                                        <a href="javascript:;">4路硬盘车载录像机</a>
                                        <a href="javascript:;">6路硬盘车载录像机</a>
                                        <a href="javascript:;">8路硬盘车载录像机</a>
                                    </div>
                                </div>
                                <div class="rows">
                                    <div class="left fl">产品类别：</div>
                                    <div class="right">      
                                        <a href="javascript:;">易甲文</a>
                                        <a href="javascript:;">奥多视</a>
                                        <a href="javascript:;">保时安</a>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="get" id="searchForm">
                                <div class="search fr">
                                    <input type="text" name="title" placeholder="比如：SD卡机 支持JT808" value="<?php echo $_GET['title']; ?>"/>
                                    <input type="hidden" name="m" value="<?php echo $_GET['m']; ?>"/>
                                    <input type="hidden" name="c" value="<?php echo $_GET['c']; ?>"/>
                                    <input type="hidden" name="a" value="goods_list"/>
                                    <input type="hidden" name="catid" value="27"/>
                                    <a href="javascript:;" class="btn" onclick="$('#searchForm').submit();" ><i></i></a>
                                </div>
                            </form>
                        </div>
                        <div class="pro_list cf">
                            <ul> 
                                
                                <?php $n=1;if(is_array($datas)) foreach($datas AS $r) { ?>
                                <li class="first">
                                    <div class="pic">
                                        <a href="<?php echo $r['url'];?>" target="_blank"><img src="<?php echo $r['thumb'];?>"/></a>
                                    </div>
                                    <div class="txt">
                                        <div class="name"> <a href="<?php echo $r['url'];?>" target="_blank"><?php echo $r['title'];?></a></div>
                                        <p><a href="<?php echo $r['make_url'];?>" target="_blank">去厂家咨询</a></p>
                                    </div>
                                </li>
                                <?php $n++;}unset($n); ?>
                              
                            </ul>
                        </div>
                    </li>
                   
                </ul>
            </div>
            <div class="page">
                 <?php echo $pages;?>
            </div>
        </div>
        
    </div>
<?php include template("content","footer"); ?>
