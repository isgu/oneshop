<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
    <!--联系我们-->
    <div class="contact">
        <div class="banne cf">
            <div class="banne_main wrap">
                <a href="<?php echo $CATEGORYS['3']['url'];?>" class="part part1 active"></a>
                <a href="<?php echo $CATEGORYS['61']['url'];?>" class="part part2" target="_blank"></a>
                <a href="<?php echo $CATEGORYS['5']['url'];?>" class="part part3 " target="_blank"></a>
            </div>
        </div>
        <div class="contact_part1 bgc2 cf">
            <div class="wrap">
                <div class="left fl">
                    <h1>深圳市通天星科技有限公司</h1>
                    <div class="rows fax">
                        <i></i> 0755-86539820
                    </div>
                    <div class="rows phone">
                        <i></i> 0755-86539820
                    </div>
                    <div class="rows email">
                        <i></i> afu@g-sky.cn
                    </div>
                    
                    <div class="rows addr">
                        <i></i> 深圳市南山区科技园科苑北路坚达大厦10号608
                    </div>    
                </div>
                <div class="mid fl">
                    <h1>关注有礼</h1>
                    <img src="<?php echo IMG_PATH;?>/QR.jpg" width="140px" height="140px"/>
                    <p>通天星企业微信平台</p>
                </div>
                <div class="right fl">
                    <img src="<?php echo IMG_PATH;?>/sp_2.gif" />
                </div>
            </div>
        </div>
        <div class="contact_part2 bgc1">

            <div class="rows cf rows1">
                <ul class="wrap">
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=acb0ebfca2a79751eb0dd35c8b6b82d9&action=lists&catid=60&num=8&order=listorder+ASC&return=data\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'60','order'=>'listorder ASC','limit'=>'8',));}?>                 
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php if($n<=4) { ?> 
                    <li>
                        <div class=""><img src="<?php echo $r['icon'];?>"></div>
                        <div class="name">
                            <span><?php echo $r['title'];?></span><?php echo $r['position'];?>
                        </div>
                        <div class="phone"><?php echo $r['phone'];?></div>
                        <div class="email"><?php echo $r['email'];?></div>
                        <div class="qq">QQ：<?php echo $r['qq_num'];?></div>
                        <a target="blank" href="tencent://message/?uin=<?php echo $r['qq_num'];?>&amp;Site=点这里和我联系&amp;Menu=yes"><div class="qq_ico"></div></a>
                    </li>
                    <?php $r ?>
                    <?php } ?>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </ul>
            </div>
            <div class="rows cf rows2">
                <ul class="wrap">
                    <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                    <?php if($n>4&&$n<=8) { ?>
                    <li>
                        <div class=""><img src="<?php echo $r['icon'];?>"></div>
                        <div class="name">
                            <span><?php echo $r['title'];?></span><?php echo $r['position'];?>
                        </div>
                        <div class="phone"><?php echo $r['phone'];?></div>
                        <div class="email"><?php echo $r['email'];?></div>
                        <div class="qq">QQ：<?php echo $r['qq_num'];?></div>
                        <a target="blank" href="tencent://message/?uin=<?php echo $r['qq_num'];?>&amp;Site=点这里和我联系&amp;Menu=yes"><div class="qq_ico"></div></a>
                    </li>
                    <?php } ?>
                    <?php $n++;}unset($n); ?>
                </ul>
            </div>
        </div>
        <div class="contact_part3 bgc2">
            <div class="wrap">
                <h1>公司介绍</h1>
                <div class="content">
                    <p>
                        深圳通天星科技有限公司 Shenzhen Babelstar Inc.以GPS定位、无线音视频技术、云视频存储技术研发为核心，为定位、无线视频终端产品提供平台服务，公司拥有业内领先的核心技术和自主研发能力。目前已拥有领先世界的视频安防技术的覆盖车载硬盘录像机、单兵录像机、网络监控摄像机、行驶记录仪等产品的视频综合平台。成熟平台产品有车载视频监控平台，车联网平台、手机直播平台、人员定位平台等。
                    </p>
                    <p>
                        公司拥有一批视频安防领域的尖端资深的技术人才，他们掌握了行业领先技术，特别是在视频压缩技术、中心存储及远程云系统方面出类拔萃。公司拥有软件著作权专利，并在自主知识产权方面走在了行业的前沿。</p>
                    <p>
                        公司秉承“开放共赢”的理念，以客户的价值和效益为第一位，为客户提供最优质产品和服务。
                    </p>
                </div>
            </div>
        </div>
        <div class="contact_part4 bgc2">
            <div class="wrap">
                <h1>核心价值观</h1>
                <div class="con"></div>
            </div>
        </div>
        <div class="contact_part5 bgc1">
            <div class="wrap">
                <h1>公司位置</h1>
                <div class="con">
                    <img src="<?php echo IMG_PATH;?>/map.gif"/><br>
                    <p>公交路线：m355，36，209，233，334，339等 科苑北站下车</p>
                </div>
            </div>
        </div>


        

    </div>
    <!--联系我们 end-->
<?php include template("content","footer"); ?>
