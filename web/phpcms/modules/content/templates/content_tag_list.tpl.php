<?php
defined('IN_ADMIN') or exit('No permission resources.');
include $this->admin_tpl('header', 'admin');
?>

<div class="subnav">
    <div class="content-menu ib-a blue line-x">
    <?php if(isset($big_menu)) echo '<a class="add fb" href="'.$big_menu[0].'"><em>'.$big_menu[1].'</em></a>　';?>
    <?php echo admin::submenu($_GET['menuid'],$big_menu); ?>
    </div>
</div>

<div class="pad-lr-10">
<form name="myform" action="?m=poster&c=poster&a=listorder" method="post">
<div class="table-list">
    <table width="100%" cellspacing="0" class="contentWrap">
        <thead>
            <tr>
            <th width="30" align="center"><input type="checkbox" value="" id="check_box" onclick="selectall('id[]');"></th>  
            <th width="30">ID</th>
			<th width="300" style="text-align: left">名称</th>
			<th width="300" style="text-align: left">英文名称</th>
			<th align="center"><?php echo L('operations_manage')?></th>
            </tr>
        </thead>
        <tbody>
 <?php 
if(is_array($infos)){
	foreach($infos as $info){
		
?>   
	<tr>
	<td align="center">
	<input type="checkbox" name="id[]" value="<?php echo $info['id']?>">
	</td>
	<td align="center"><?php echo $info['id']?></td>
	<td><?php echo $info['name']?></td> 
	<td><?php echo $info['en_name']?></td> 
	<td align="center"><a href="javascript:edit(<?php echo $info['id'] ?>,'修改')" ><?php echo L('edit')?></a>|<a href="?m=content&c=content_tag&a=delete&id=<?php echo $info['id']?>"><?php echo L('delete')?></a></td>
	</tr>
<?php 
	}
}
?>
</tbody>
    </table>
  
    <div class="btn"><label for="check_box"><?php echo L('selected_all')?>/<?php echo L('cancel')?></label>
    	
    	</div>  </div>
 <div id="pages"><?php echo $this->db->pages;?></div>
</form>
</div>
</body>
</html>
<script type="text/javascript">
<!--
	function edit(id, name) {
	window.top.art.dialog({id:'edit'}).close();
	window.top.art.dialog({title:name, id:'edit', iframe:'?m=content&c=content_tag&pc_hash=<?php echo $_SESSION['pc_hash'];?>&a=edit&id='+id ,width:'320',height:'100'}, function(){var d = window.top.art.dialog({id:'edit'}).data.iframe;// 使用内置接口获取iframe对象
	var form = d.document.getElementById('dosubmit');form.click();return false;}, function(){window.top.art.dialog({id:'edit'}).close()});
}
//-->
</script>