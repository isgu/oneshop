<?php 
defined('IN_ADMIN') or exit('No permission resources.');
//$show_header = $show_validator = $show_scroll = 1;
$show_dialog = $show_header = 1; 
include $this->admin_tpl('header', 'admin');
$authkey = upload_key('1,'.$this->M['ext'].',1');
?>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>formvalidator.js" charset="UTF-8"></script>
<script language="javascript" type="text/javascript" src="<?php echo JS_PATH;?>formvalidatorregex.js" charset="UTF-8"></script>


<form method="post" action="?m=content&c=content_tag&a=add" id="myform">
<input type="hidden" name="info[type]" value="<?php echo $type;?>">
<table class="table_form" width="100%" cellspacing="0">
<tbody>
	<tr>
		<th width="100">中文名称：</th>
		<td><input name="info[name]" id="name" class="input-text" type="text" size="25"></td>
	</tr>
	<tr>
		<th width="100">英文名称：</th>
		<td><input name="info[en_name]" id="enname" class="input-text" type="text" size="25"></td>
	</tr>
	
	</tbody>
	</table>
<div style="display:none"><input type="submit" name="dosubmit" id="dosubmit" value=" <?php echo L('ok')?> " class="button"></div>
</form>
</body>
</html>
