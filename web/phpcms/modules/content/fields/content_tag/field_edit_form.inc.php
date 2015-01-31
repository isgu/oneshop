<?php defined('IN_PHPCMS') or exit('No permission resources.');?>
<table cellpadding="2" cellspacing="1" width="98%">
	<tr> 
      <td width="100">分类标识</td>
      <td><input type="text" name="setting[tag]" value="<?php echo $setting['tag'] ?>"></td>
    </tr>
</table>
<SCRIPT LANGUAGE="JavaScript">
<!--
	function fieldtype_setting(obj) {
	if(obj!='varchar') {
		$('#minnumber').css('display','');
	} else {
		$('#minnumber').css('display','none');
	}
}
//-->
</SCRIPT>