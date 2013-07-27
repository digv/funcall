<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Digv call 网络电话</</title>
<link rel="stylesheet" href="http://account.uucall.com/css/global.css"
	type="text/css" />
<link rel="stylesheet" href="http://account.uucall.com/css/login.css"
	type="text/css" />
<script type="text/javascript"
	src="http://account.uucall.com/js/base.js"></script>
<script type="text/javascript"
	src="http://account.uucall.com/js/miniWin.js"></script>
<script type="text/javascript"
	src="http://account.uucall.com/js/loginUtil.js"></script>
<script type="text/javascript">
			function submitForm() {
				var loginname = G('username');
				var password = G('password');
				if (trim(loginname.value) == '') {
					makeMsg("帐号不能为空");
					loginname.focus();
					return false;
				}
				if (trim(password.value) == '') {
					makeMsg("密码不能为空");
					password.focus();
					return false;
				}
				
			}
			function trim(str) {
				return str.replace(/^\s+|\s+$/g, "");
			}
			function makeMsg(str) {
				var msg = G('page_msg');
				msg.innerHTML = "<span>" + str + "</span>";
			}
			function clearMsg(){
				G('page_msg').innerHTML = "";
			}
			var loginCfg = {};
			var usernameTextClickCount = 0;
			var initUsernameText = function(){
				var init = function(){
					G('username').value = "邮箱或UUCall帐号";
					G('username').style.fontSize = "11px";
					G('username').style.color = '#806681';
				}
				var clear = function(){
					usernameTextClickCount++;
					G('username').value = '';
					G('username').style.fontSize = "14px";
					G('username').style.backgroundColor = "white";
					G('username').style.color = 'black';	
				}
				G('username').onfocus = function(){
					if(usernameTextClickCount == 0) {
						clear();
					}
				}
				G('username').onblur = function() {
					if(trim(G('username').value) === '') {
						if(usernameTextClickCount > 0){	
							usernameTextClickCount = 0;
							init();
						}
						 
					}
				}
				init();
			}
			//----------------------------------------------
			var Mask_Login = new Mask_Login();
			function openWin() {
				if (Mask_Login.flag) {
					Mask_Login.hide();
						showWinlogin();
					}
				}
							
			function fastLogin() {
				Mask_Login.flag = true;
				Mask_Login.show("Mask_Login");
					loadScript('oFastLogin', 'http://account.uucall.com/script.js?f=fastlogin&' + Math.random());
			}
			
			function popwindow(){
				Mask_Login.flag = true;
				Mask_Login.show("Mask_Login");
				loadScript('oFastLogin', 'http://account.uucall.com/script.js?f=fastlogin&' + Math.random());
			}
			
			
			
		</script>
</head>
<!-- old
<body onload="G('username').focus();">
 -->
<body onload="initUsernameText();">
<form name="accountForm" method="post" action="/checkUser.do"
	onsubmit="return submitForm();"><input type="hidden" name="to" value="">
<div id="header">
<h1 id="logo"><a href="http://www.uucall.com"><img
	src="http://image.uucall.cn:8180/aacall/website/image/logo.jpg" /></a>
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
		<td style="line-height: 26px;">&nbsp;<a
			href="http://account.uucall.com/showGetPwd.do">忘记密码？</a></td>
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
<p style="padding-top: 8px;">还未注册UUCall?&nbsp;&nbsp;<a
	href="http://account.uucall.com/register.do">立即注册</a></p>
</div>
</div>


<div id="footer" style="font-family: Arial;">
<div id="links"><a href="http://www.uucall.com/about/">关于UUCall</a> | <a
	href="http://www.uucall.com/introduce.html">了解UUCall</a> | <a
	href="http://www.uucall.com/about/history.html">UUCall历程</a> | <a
	href="http://www.uucall.com/about/service.html">客户服务</a> | <a
	href="http://www.uucall.com/about/business.html" rel="nofollow">市场合作</a>
| <a href="http://www.uucall.com/about/partner.html">合作伙伴</a> | <strong><a
	href="http://www.uucall.com">网络电话</a></strong></div>
Copyright?2010 CHINA TELECOM (HONG KONG)INTERNATIONAL GROUP CO., LIMITED
中華電信（香港）國際有限公司. 闽ICP备06030882号<br />
<a
	href="http://www.ofta.gov.hk/en/tele-lic/operator-licensees/pnets-ets.html"
	rel="nofollow" target="_blank" style="color: #9A9A9A">香港电讯管理局PNETS牌照第1533号</a><br />
<img
	src="http://image.uucall.cn:8180/aacall/website/image/pay_360renzheng.jpg" /><img
	src="http://image.uucall.cn:8180/aacall/website/image/pay_kuaiqian.jpg" /><img
	src="http://image.uucall.cn:8180/aacall/website/image/pay_zhifubao.jpg" /><img
	src="http://image.uucall.cn:8180/aacall/website/image/pay_yibao.jpg" />
<script
	src="http://s9.cnzz.com/stat.php?id=4938497&web_id=4938497&show=pic1"
	language="JavaScript"></script></div>
<script type="text/javascript"
	src="http://account.uucall.com/script.js?f=message"></script> <script
	type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20864828-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> <script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-5621701-1");
pageTracker._trackPageview();
} catch(err) {}
loadScript('autock2', 'http://image.uucall.cn:8180/aacall/adds/p/autock2.js?' + Math.random());
</script> <script src="http://static.getclicky.com/js"
	type="text/javascript"></script> <script type="text/javascript">try{ clicky.init(66368548); }catch(err){}</script>
<div style="display: none;">本站关键词：<a href="http://www.uucall.com/"
	title="网络电话" target="_blank"><strong>网络电话</strong></a> <a
	href="http://www.uucall.com/" title="免费网络电话" target="_blank"><strong>免费网络电话</strong></a><a
	href="http://www.uucall.com/" title="网络电话免费打" target="_blank"><strong>网络电话免费打</strong></a>
<a href="http://www.uucall.com/" title="免费电话" target="_blank"><strong>免费电话</strong></a><a
	href="http://www.uucall.com/sitemap.htm" title="百度站点地图" target="_blank"><strong>百度站点地图</strong></a>
<a href="http://www.uucall.com/sitemap.xml" title="Google站点地图"
	target="_blank"><strong>Google站点地图</strong></a></div>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20864828-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script> <br />
<br />
<br />

</form>
</body>

</html>
