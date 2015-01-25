<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!--footer-->
    <div class="footer cf">
        <div class="wrap">
            <div class="left fl">
                <h1>关于我们</h1>
                <img src="<?php echo IMG_PATH;?>/QR.jpg" alt="微信二维码" width="120px" height="120px"/>
                <p>通天星微信平台</p>
            </div>
            <div class="right link fl">
                <?php $i=1?>
                <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8cace473c1030fa582984e571d1979c9&action=category&catid=28&num=4&order=listorder+ASC\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'28','order'=>'listorder ASC','limit'=>'4',));}?>
                <?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                <div class="part part<?php echo $i;?>">
                    <h1><?php echo $r['catname'];?></h1>
                    <?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f8563a8369882022430f8299cd67b6c7&action=category&catid=%24r%5Bcatid%5D&order=listorder+ASC&return=value\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">修改</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$value = $content_tag->category(array('catid'=>$r[catid],'order'=>'listorder ASC','limit'=>'20',));}?>
                    <?php $n=1;if(is_array($value)) foreach($value AS $v) { ?>
                    <p><a href="<?php echo $v['url'];?>" target="_blank"><?php echo $v['catname'];?></a></p>
                    <?php $n++;}unset($n); ?>
                    <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                </div>
                <?php $i++; ?>
                <?php $n++;}unset($n); ?>
                <?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
                
            </div>
        </div>
    </div>
    <!--footer end-->
    <!--copyright-->
    <div class="copyright">
        Copyright ©2012-2014 深圳市通天星科技有限公司 Shenzhen Babelstar Inc.All rights reserved.粤ICP12085146
    </div>
    <!--copyright end-->
</body>
</html>
