<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>

 <div class="pro_appl_info ">
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
        </div>
        <div class="wrap">
            <div class="type2 cf">
                <div class="type2_list fl">
                    <div class="rows">                      
                        <a href="javascript:;">SD车载录像机</a>
                        <a href="javascript:;">4路硬盘车载录像机</a>
                        <a href="javascript:;">6路硬盘车载录像机</a>
                        <a href="javascript:;">8路硬盘车载录像机</a>
                    </div>
                </div>
                <div class="search fr">
                    <input type="text" placeholder="比如：SD卡机 支持JT808"/>
                    <a href="javascript:;" class="btn"><i></i></a>
                </div>
            </div>
        </div>
        <div class="info cf bgc2">
            <div class="wrap">
                <a href= "javscript:history.go(-1)" class="back"> </a>
                <h1><?php echo $title;?></h1>
                <div class="row cf">
                    <div class="share fl">
                        <a href="" class="ico1"></a>
                        <a href="" class="ico2"></a>
                        <a href="" class="ico3"></a>
                        <a href="" class="ico4"></a>
                        <a href="" class="ico5"></a>
                        <a href="" class="ico6"></a>
                        <a href="" class="ico7"></a>
                    </div>
                    <div class="ask fr"><a href="<?php echo $make_url;?>" target="_blank"></a></div>
                </div>
                <div class="scroll">
                    <div class="scroll_con">
                        <ul class="b_img">
                           
                            <li><img src="<?php echo $img['url'];?>"/></li>
                           
                        </ul>
                    </div>
                    
                    <a href="javascript:;" class="prev arrow"></a>
                    <a href="javascript:;" class="next arrow"></a>
                    <ul class="s_img">
                        <?php $n=1;if(is_array($product_images)) foreach($product_images AS $img) { ?>
                        <li><img src="<?php echo $img['url'];?>" width="112" height="112" /></li>
                        <?php $n++;}unset($n); ?>
                    </ul>
                </div>
                <div class="describe">
                    <?php echo $content;?>
                </div>
            </div>   
        </div>
        <div class="same_pro">
            <div class="wrap">
                <h1>同一厂家相关产品</h1>
                <div class="pro_list cf">
                    <ul>    
                        <li class="first">
                            <div class="pic">
                                <a href="" target="_blank"><img src="" <="" a="">
                            </a></div><a href="" target="_blank">
                            </a><div class="txt"><a href="" target="_blank">
                                </a><div class="name"><a href="" target="_blank"> </a><a href="" target="_blank">车载监控 迷你4路D1DVR系统迷你4路D1DVR系统迷你4路D1DVR系统 高清SD</a></div>
                                <p><a href="" target="_blank">去厂家咨询</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="pic">
                                <a href="" target="_blank"><img src="" <="" a="">
                            </a></div><a href="" target="_blank">
                            </a><div class="txt"><a href="" target="_blank">
                                </a><div class="name"><a href="" target="_blank"> </a><a href="" target="_blank">车载监控 迷你4路D1DVR系统 高清SD</a></div>
                                <p><a href="" target="_blank">去厂家咨询</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="pic">
                                <a href="" target="_blank"><img src="" <="" a="">
                            </a></div><a href="" target="_blank">
                            </a><div class="txt"><a href="" target="_blank">
                                </a><div class="name"><a href="" target="_blank"> </a><a href="" target="_blank">车载监控 迷你4路D1DVR系统 高清SD</a></div>
                                <p><a href="" target="_blank">去厂家咨询</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="pic">
                                <a href="" target="_blank"><img src="" <="" a="">
                            </a></div><a href="" target="_blank">
                            </a><div class="txt"><a href="" target="_blank">
                                </a><div class="name"><a href="" target="_blank"> </a><a href="" target="_blank">车载监控 迷你4路D1DVR系统 高清SD</a></div>
                                <p><a href="" target="_blank">去厂家咨询</a></p>
                            </div>
                        </li>
                        <li class="first">
                            <div class="pic">
                                <a href="" target="_blank"><img src="" <="" a="">
                            </a></div><a href="" target="_blank">
                            </a><div class="txt"><a href="" target="_blank">
                                </a><div class="name"><a href="" target="_blank"> </a><a href="" target="_blank">车载监控 迷你4路D1DVR系统 高清SD</a></div>
                                <p><a href="" target="_blank">去厂家咨询</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php include template("content","footer"); ?>
