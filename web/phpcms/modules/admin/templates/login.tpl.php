<?php defined('IN_ADMIN') or exit('No permission resources.'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET;?>" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title><?php echo L('phpcms_logon')?></title>
<style type="text/css">
	
body{background:#1175b1;}
	 div{overflow:hidden; *display:inline-block;}div{*display:block;}
	.login_box{background:url(/statics/images/admin_img/login.png) no-repeat; width:935px; height:617px; overflow:hidden; position:absolute; left:40%; top:35%; margin-left:-301px; margin-top:-208px;}
	input{outline: none}
	.login_iptbox{font-size:12px;height:30px;position:absolute; left:400px; top:280px;width:560px; overflow:visible;}
	.login_iptbox .ipt{height:16px; width:140px; color:#fff; padding: 4px 5px; border:1px solid #ddd; border-top:1px solid #999; border-left:1px solid #999;color:#000; overflow:hidden;}
	.login_iptbox .ipt:focus{border:1px solid #f60;}
		.login_iptbox label{ *position:relative; *top:-6px;}
	
	.login_iptbox .ipt_reg{width:50px;}
	.login_tj_btn{ width:62px; height:28px; border:0; cursor: pointer; background:url(/statics/images/admin_img/logins.png) no-repeat;}
	.yzm{position:absolute; background:url(/statics/images/admin_img/login_ts140x89.gif) no-repeat; width:140px; height:89px;right:56px;top:-96px; text-align:center; font-size:12px; display:none;}
	.yzm a:link,.yzm a:visited{color:#036;text-decoration:none;}
	.yzm a:hover{color:#C30;}
	.yzm img{cursor:pointer; margin:4px auto 7px; width:130px; height:50px; border:1px solid #fff;}
	.cr{font-size:12px;font-style:inherit;text-align:center;color:#ccc;width:100%; position:absolute; bottom:58px;}
	.cr a{color:#ccc;text-decoration:none;}
	.login_iptbox table th{text-align: right; padding: 5px}
	#code_img{height: 24px; padding-left:4px; cursor: pointer;}
</style>
<script language="JavaScript">
<!--
	if(top!=self)
	if(self!=top) top.location=self.location;
//-->
</script>
</head>

<body onload="javascript:document.myform.username.focus();">
<div id="login_bg" class="login_box">
	<div class="login_iptbox">
   	 <form action="index.php?m=admin&c=index&a=login&dosubmit=1" method="post" name="myform">
   	 	
   	 	<table>
   	 		<tr>
   	 			<th>
   	 				<label><?php echo L('username')?>：</label>
   	 			</th>
   	 			<td>
   	 				<input name="username" type="text" class="ipt" value="" />
   	 			</td>
   	 		</tr>
   	 		<tr>
   	 			<th>
   	 				<label><?php echo L('password')?>：</label>
   	 			</th>
   	 			<td>
   	 				<input name="password" type="password" class="ipt" value="" />
   	 			</td>
   	 		</tr>
   	 		<tr>
   	 			<th>
   	 				<label><?php echo L('security_code')?>：</label>
   	 			</th>
   	 			<td>
   	 				<input name="code" type="text" style="float:left" class="ipt ipt_reg" onfocus="document.getElementById('yzm').style.display='block'" />
   	 				<?php echo form::checkcode('code_img')?> 
   	 			</td>
   	 		</tr>
   	 		<tr>
   	 			<th>
   	 				
   	 			</th>
   	 			<td>
   	 				<input name="dosubmit" value="" type="submit" class="login_tj_btn" />
   	 				
   	 			</td>
   	 		</tr>
   	 	</table>
   	 	
   	 	<br>
   	 	
   	 	
   
     </form>
    </div>
    <div class="cr"></div>
</div>
</body>
</html>