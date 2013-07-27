<?php 
include_once 'inc/config.php';
include_once 'inc/TYauth.php';

$o = new TYAuthV2(APP_ID, APP_SECRET);
$url = $o -> getAuthorizeURL(TY_CALL_BACK);
	

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digv call 网络电话</</title>
<link rel="stylesheet" href="/css/style.css"
	type="text/css" />
<link rel="stylesheet" href="/css/login.css"
	type="text/css" />
</head>
<!-- old
<body onload="G('username').focus();">
 -->
<body>
<form name="accountForm" method="post" action="/checkUser.do"
	onsubmit="return submitForm();"><input type="hidden" name="to" value="">
<div id="header">
<h1 id="logo"><a href="http://call.digv.cn"><img
	src="http://image.uucall.cn:8180/aacall/website/image/digv.jpg" /></a>
</h1>
<div id="top_r">
<div id="top_r_t">
<ul class="style1">
	<li><a href="http://www.uucall.com">首页</a></li>
	<li><a href="http://account.uucall.com/register.do">注册</a></li>
</ul>
</div>
</div>
<div class="clear"></div>
</div>

<div id="maincon">

<style>
#loginzone table td {
	line-height: 14px;
	vertical-align: top;
}

#loginzone table td * {
	vertical-align: top;
}
</style>
<div id="loginzone">
<table width="340" border="0" cellspacing="0" cellpadding="0"
	class="loginta">
	<tr>
		<td colspan="3" height="28" style="padding-top: 0px;"><label
			id="page_msg"> </label></td>
	</tr>
	<tr height="35">
		<td width="65"><strong>&nbsp;&nbsp;帐&nbsp;&nbsp;号</strong></td>
		<td width="185"><input type="text" name="uinfo.name" maxlength="30"
			tabindex="1" value="" onkeydown="clearMsg();" id="username"
			style="ime-mode: disabled"></td>
		<td width="90">&nbsp;</td>
	</tr>
	<tr height="35">
		<td><strong>&nbsp;&nbsp;密&nbsp;&nbsp;码</strong></td>
		<td><input type="password" name="uinfo.password" id="password"
			tabindex="2" style="ime-mode: disabled" onkeydown="clearMsg();"
			maxlength="16" /></td>
		<!-- <td style="line-height: 26px;">&nbsp;<a
			href="http://account.uucall.com/showGetPwd.do">忘记密码？</a></td>  -->
	</tr>


	<tr height="47">
		<td colspan="3" height="47"></td>
	</tr>

	<tr>
		<td>&nbsp;</td>
		<td class="tdcenter"><input width="126" height="42" id="login_submit"
			name="submit" type="image"
			src="http://image.uucall.cn:8180/aacall/account/image/login/login_05.jpg" /></td>
		<td>&nbsp;</td>
	</tr>
</table>
<p style="padding-top: 8px;"><a href="<?php echo $url ; ?>"><img src="/images/tianyi.jpg" /></a></p>
</div>
</div>
</form>
</body>

</html>
