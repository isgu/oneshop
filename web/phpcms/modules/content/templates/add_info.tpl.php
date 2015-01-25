<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header','admin');?>
<style type="text/css">
html,body{ background:#e2e9ea}
</style>
<script type="text/javascript">
<!--
    var charset = '<?php echo CHARSET;?>';
    var uploadurl = '<?php echo pc_base::load_config('system','upload_url')?>';
//-->
</script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>content_addtop.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>colorpicker.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>hotkeys.js"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH?>cookie.js"></script>
<script type="text/javascript">var catid=<?php echo $catid;?></script>
<form name="myform" id="myform" action="?m=content&c=content&a=add_info" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
<input type="hidden" name="catid" value="<?php echo $_GET['catid'] ?>">

<div class="addContent">
<div class="col-right">
    </div>
    <div class="col-auto">
        <div class="col-1">
            <div class="content pad-6">
                <table width="100%" cellspacing="0" class="table_form">
                <?php for ($i=0; $i < 6 ; $i++) { ?>
                    <input type="hidden" name="info[id][]" value="<?php echo $result[$i]['id'];?>">
                    <tbody> 
                        <tr>
                            <th width="80"> 选项卡<?php echo $i+1; ?>名称 </th>
                            <td>
                            <input id="name" class="input-text" type="text" style="width:280px" value="<?php echo $result[$i]['name'];?>" name="info[name][]">
                            此为选项卡名
                            </td>
                        </tr>
                        <tr>
                            <th width="80">内容</th>
                            <td>
                            <textarea name="info[content][]" id="content_<?php echo $i ?>"><?php echo $result[$i]['content'];?></textarea>
                            <?php echo form::editor('content_'.$i,'full','','','',1,1)?>
                            </td>
                        </tr>
                    </tbody>
                <?php } ?>
                </table>
            </div>
        </div>
        
    </div>
</div>
<div class="fixed-bottom">
    <div class="fixed-but text-c">
    <div class="button">
    <input value="<?php if($r['upgrade']) echo $r['url'];?>" type="hidden" name="upgrade">
    <input value="<?php echo $id;?>" type="hidden" name="id"><input value="<?php echo L('save_close');?>" type="submit" name="dosubmit" class="cu" onclick="refersh_window()"></div>
    <div class="button"><input value="<?php echo L('save_continue');?>" type="submit" name="dosubmit_continue" class="cu" onclick="refersh_window()"></div>
    <div class="button"><input value="<?php echo L('c_close');?>" type="button" name="close" onclick="refersh_window();close_window();" class="cu" title="Alt+X"></div>
      </div>
</div>
</form>

</body>
</html>
<script type="text/javascript"> 
<!--
//只能放到最下面
var openClose = $("#RopenClose"), rh = $(".addContent .col-auto").height(),colRight = $(".addContent .col-right"),valClose = getcookie('openClose');
$(function(){
    if(valClose==1){
        colRight.hide();
        openClose.addClass("r-open");
        openClose.removeClass("r-close");
    }else{
        colRight.show();
    }
    openClose.height(rh);
    $.formValidator.initConfig({formid:"myform",autotip:true,onerror:function(msg,obj){window.top.art.dialog({content:msg,lock:true,width:'200',height:'50'},   function(){$(obj).focus();
    boxid = $(obj).attr('id');
    if($('#'+boxid).attr('boxid')!=undefined) {
        check_content(boxid);
    }
    })}});
    <?php echo $formValidator;?>
    
/*
 * 加载禁用外边链接
 */
    jQuery(document).bind('keydown', 'Alt+x', function (){close_window();});
})
document.title='<?php echo L('edit_content').addslashes($data['title']);?>';
self.moveTo(0, 0);
function refersh_window() {
    setcookie('refersh_time', 1);
}
openClose.click(
      function (){
        if(colRight.css("display")=="none"){
            setcookie('openClose',0,1);
            openClose.addClass("r-close");
            openClose.removeClass("r-open");
            colRight.show();
        }else{
            openClose.addClass("r-open");
            openClose.removeClass("r-close");
            colRight.hide();
            setcookie('openClose',1,1);
        }
    }
)
//-->
</script>
