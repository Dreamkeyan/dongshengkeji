<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>XYHCMS</title>
<script type="text/javascript">
	var verifyUrl="<?php echo U('Login/verify','','');?>";
	var CONTROL_U = "<?php echo U('Login/checkusername');?>";
	var CONTROL_P = "<?php echo U('Login/checkpassword');?>";
	var URLPATHDEPR= "<?php echo C('URL_PATHINFO_DEPR');?>";
	$(function(){
		$('#vcode').click();
	});
</script>

<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/dongshengsan/Code/Public/asset/manage/js/login.js"></script>		
<link rel="stylesheet" href="/dongshengsan/Code/Public/asset/manage/css/login.css" />
</head>	
<body>
	<div class="login">
		<div class="loginForm">	
			<form action="<?php echo U('Login/login');?>" method="post" id="login">
			<div class="title">
				行云海CMS 登录			</div>
			<table width="100%">
				<tr>
					<th>管理员帐号:</th>
					<td>
						<input type="username" name="username" class="len220"/>
					</td>
				</tr>
				<tr>
					<th>密码:</th>
					<td>
						<input type="password" class="len220" name="password"/>
					</td>
				</tr>
				<tr>
					<th>验证码:</th>
				  <td>
						<input type="code" class="len220" name="code" autocomplete="off" /></td>
				</tr>
				<tr>
					<th>&nbsp;</th>
				  	<td>
						<img src="<?php echo U('Login/verify');?>" align="absmiddle" id="vcode"  class="vcode" onclick="change_code();"/>
					</td>
				</tr>
				<tr>
					<td colspan="2" style="padding-left:120px;"> <input type="submit" class="btn_blue" value="登录"/><span  class="msg"></span></td>
				</tr>
			</table>
		</form>
		</div>
	</div>

</body>
</html>