<?php
session_start ();

var_dump($_SESSION);
if (isset ( $_SESSION ['login'] ) && !empty($_SESSION ['login'])) {

} else {
	header ( 'location:/login.php' );
}

?>








<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的帐户 - Digv Call 网络电话</title>
<link rel="stylesheet" href="http://www.uucall.com/css/style.css"
	type="text/css" />
<link rel="stylesheet"
	href="http://account.uucall.com/css/account_index.css" type="text/css" />
<link rel="stylesheet"
	href="http://account.uucall.com/css/account_con.css" type="text/css" />
<link rel="stylesheet" href="http://www.uucall.com/css/my_rate.css"
	type="text/css" />
<link rel="stylesheet" href="http://www.uucall.com/css/free.css"
	type="text/css" />
</head>

<body>
<div id="wrap">

<div id="header" style="position: relative; z-index: 1000;">
<div class="nav-top" style="height: 80px; overflow: hidden;">
<h1 id="logo" style="float: left; padding: 10px 0px 0px 10px;"><a
	href="http://www.uucall.com" title="UUCall网络电话"><img
	src="http://image.uucall.cn:8180/aacall/website/image/logo.jpg"
	alt="UUCall网络电话" /></a></h1>
<div id="top_r" style="float: right; width: 500px; padding-left: 0px;">
<div id="top_r_t" style="float: right;"></div>
<div id="top_r_b" style="float: right; width: 500px;">
<div id="account_c"></div>
<span id="account_c_span"><a
	href='http://www.uucall.com/u/showUserInfo.do' rel="nofollow">我的帐户</a>
</span>
<div id="top_userzone"></div>
</div>
</div>
</div>
<div class="clear"></div>
<div id="top_banner">
<div id="top_banner_l"></div>
<div id="top_banner_c">
<div id="navList"><a href="http://www.uucall.com/"
	class="top_banner_on0">首页</a> <!--  <a href="http://gold.uucall.com" class="top_banner_on6" target="_blank">赚话费</a>-->
<a href="http://www.uucall.com/introduce.html" class="top_banner_on1">了解UUCall</a>
<a href="http://www.uucall.com/download.html" class="top_banner_on2">软件下载</a>
<a href="http://www.uucall.com/pay/" class="top_banner_on3">充值中心</a> <a
	href="http://www.uucall.com/fee.html" class="top_banner_on4">费率查询</a> <a
	href="http://www.uucall.com/phonecall.do" class="top_banner_on5">手机回拨</a>

</div>

</div>
<div id="top_banner_r"></div>
<span class="style2"><a href="http://service.uucall.com/"
	target='_blank'>帮助中心</a></span></div>
<div class="clear"></div>

<div id="index_user">
<div><img
	src="http://image.uucall.cn:8180/aacall/website/image/index_user_03.jpg" /></div>
<div id="index_user_con">

<div id="account_c_new"></div>
<span id="new_myaccount"><a
	href='http://www.uucall.com/u/showUserInfo.do' rel="nofollow">我的帐户</a>
</span>
<div class="clear"></div>
<ul>
	<li><a href="http://www.uucall.com/u/showCallList.do" rel="nofollow">通话记录</a></li>
	<li><a href="http://www.uucall.com/pay/u/showMyWare.do" rel="nofollow">我的套餐</a></li>
	<!--<li><a href="http://www.uucall.com/pay/u/showAddRemittance.do?type=1" rel="nofollow">汇款信息</a></li>-->
	<!--<li><a href="http://www.uucall.com/u/showMyRate.do" rel="nofollow">我的费率</a></li>-->
</ul>
</div>
<div><img
	src="http://image.uucall.cn:8180/aacall/website/image/index_user_13.jpg" /></div>
</div>
</div>
<div class="clear"></div>

<div><img
	src="http://image.uucall.cn:8180/aacall/account/image/acc_index_new_03.jpg" /></div>
<div id="maincon" style="margin-bottom: 0px;">
<div id="maincon_l">
<div id="maincon_l_c">

<div id="maincon_c_l">
<h1 id="maincon_c_l_h1"><a
	href='http://www.uucall.com/u/showUserInfo.do'>我的帐户首页</a></h1>
<ul>
	<li class="account_btn_on13"><a
		href="http://account.uucall.com/u/commend.do">我要推荐</a> <img
		src="http://image.uucall.cn:8180/aacall/account/image/account_index_41.jpg"
		border="0" /></li>
</ul>
<h2><span id="left_title1">信息查询</span></h2>
<ul id="left_menu_one">
	<li class="account_btn_on0"><a
		href="http://www.uucall.com/u/showCallList.do">通话记录</a></li>
	<li class="account_btn_on14"><a
		href="http://www.uucall.com/u/showCallbackList.do">手机拨打记录</a></li>
	<li class="account_btn_on1"><a
		href="http://www.uucall.com/pay/u/showMyWare.do">我的套餐</a></li>
	<!--<li class="account_btn_on2"><a href="http://www.uucall.com/u/showMyRate.do">我的费率</a></li>-->
	<li class="account_btn_on3"><a
		href="http://www.uucall.com/u/showChargeList.do">充值记录</a></li>
	<li class="account_btn_on4"><a
		href="http://www.uucall.com/u/showConsumeList.do">消费记录</a></li>
</ul>
<h2><span id="left_title2">业务办理</span></h2>
<ul id="left_menu_two">
	<!--<li class="account_btn_on5"><a href="http://www.uucall.com/pay/offer.do?area=1" target="_blank">帐户充值</a></li>-->
	<li class="account_btn_on6"><a href="http://www.uucall.com/pay/"
		target="_blank">套餐办理</a></li>
	<li class="account_btn_on7"><a
		href="http://www.uucall.com/pay/u/card.do">卡激活</a></li>
	<!--<li class="account_btn_on8"><a href="http://www.uucall.com/pay/u/showAddRemittance.do?type=1">汇款信息</a></li>-->
</ul>
<h2><span id="left_title2">帐户管理</span></h2>
<ul id="left_menu_three">
	<li class="account_btn_on9"><a
		href="http://www.uucall.com/u/showMessageList.do">我的信箱</a><a
		id="unreadcount" style="padding-left: 5px; font-weight: bold;"></a></li>
	<li class="account_btn_on10"><a
		href="http://account.uucall.com/u/showChangePwd.do">修改帐户密码</a></li>
	<li class="account_btn_on11"><a
		href="http://account.uucall.com/u/privacyProtect.do">设置隐私保护</a></li>
	<li class="account_btn_on15"><a
		href="http://www.uucall.com/u/bindPhone.do">绑定手机号码</a></li>
	<li class="account_btn_on16"><a
		href="http://account.uucall.com/u/showAddress.do">收货地址信息</a></li>
</ul>
</div>
<script type="text/javascript"
	src="http://www.uucall.com/script.js?f=unreadmsg"></script>

<div id="maincon_l_c_r">
<div id="maincon_l_c_r_con">
<div id="free_msg" style="display: none;"><font>您还未参加过免费体验，<a
	href="http://www.uucall.com/free/free.jsp">点此这里</a>立即参加免费体验</font>
<div id="free_exit"><img
	src="http://image.uucall.cn:8180/aacall/account/image/account_index_19.jpg"
	onclick="closeTip('free_msg')" /></div>
</div>
<div id="active_msg" style="display: none;"><font><label
	id="send_email_result">您账号的Email未经过系统认证，您可以<a
	href="javascript:sendEmailActive();">点击此处</a>发送认证邮件。</label></font>
<div id="active_exit"><img
	src="http://image.uucall.cn:8180/aacall/account/image/account_index_19.jpg"
	onclick="closeTip('active_msg')" /></div>
</div>
<div id="email_msg" style="display: none;"><font>您的用户名未绑定Email，<a
	href="javascript:OpenDiv(1);">点此这里</a>进行绑定</font>
<div id="email_exit"><img
	src="http://image.uucall.cn:8180/aacall/account/image/account_index_19.jpg"
	onclick="closeTip('email_msg')" /></div>
</div>
<div class="clear"></div>
<div id="welcome">
<div style="float: left;">
<div style="float: left; padding-right: 8px;">欢迎您：<span>250276522@qq.com</span></div>
<div style="float: left; padding-top: 10px; padding-right: 10px;"><img
	src="http://image.uucall.cn:8180/aacall/account/image/email_unchecked.gif"
	id="email_checked_img" /></div>
</div>
<div style="float: left; white-space: nowrap">UUCall号码：<span>21325429</span></div>
</div>
<div id="unread_msg_other" style="display: none;"><font><a
	href="http://www.uucall.com/u/showMessageList.do">您有新邮件，请查收</a></font>
</div>
<div class="clear"></div>
<hr />
现金余额：<font id="account_money">0.0</font> 元&nbsp;&nbsp;&nbsp;&nbsp;


<hr />
话费余额：<font id="account_money">0.0</font> 元
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a
	href="http://www.uucall.com/pay/offer.do?area=2">立即充值</a><br />

您上次登录时间：2013年02月13日 14点53分<br />

<hr />


<h3>我还没有办理套餐，或套餐还未生效。<a href="http://www.uucall.com/pay/"
	target="_blank" style="font-size: 12px;">办理新套餐</a></h3>
<hr />

<h3>我的费率</h3>
<div class="index_my_rate">
<dl>
	<!--<dt>被叫号码</dt>
								<dt>标准费率</dt>
								<dt>我的费率</dt>
								<dt style=" display:none;">节省</dt>
								
								
									<dd>中国大陆</dd>
									<dd>0.10元/分钟</dd>
									<dd>0.100元/分钟</dd>
									<dd class="dd_red" style="display:none;">省0.00%</dd>
								
									<dd>新加坡</dd>
									<dd>0.12元/分钟</dd>
									<dd>0.120元/分钟</dd>
									<dd class="dd_red" style="display:none;">省0.00%</dd>
								
									<dd>美国</dd>
									<dd>0.15元/分钟</dd>
									<dd>0.150元/分钟</dd>
									<dd class="dd_red" style="display:none;">省0.00%</dd>
								
								
								<dd class="last_dd_1" style="width:100%;"><a href="http://www.uucall.com/u/showMyRate.do">查询其它地区费率</a></dd>-->

	<dt>被叫号码</dt>
	<dt>标准IP资费</dt>
	<dt>UUCall标准资费</dt>
	<dt>打一个小时省多少</dt>

	<dd>中国大陆</dd>
	<dd>0.40元/分钟</dd>
	<dd>0.10元/分钟</dd>
	<dd><b style="color: #ff5500">省18.00元</b></dd>
	<dd>新加坡</dd>
	<dd>3.60元/分钟</dd>
	<dd>0.12元/分钟</dd>
	<dd><b style="color: #ff5500">省208.00元</b></dd>
	<dd>美国</dd>
	<dd>2.40元/分钟</dd>
	<dd>0.18元/分钟</dd>
	<dd><b style="color: #ff5500">省133.20元</b></dd>

	<dd class="last_dd_1" style="width: 100%;"><a
		href="http://www.uucall.com/fee.html" target="_blank">查询其它地区费率</a></dd>


	<!--<dd class="last_dd_2"><a href="http://www.uucall.com/pay/biz.do?id=3">购买费率调整卡</a></dd>-->
</dl>
</div>
<hr />
<h3>最新动态</h3>

<ul id="last_news">
	<li class="spc_news"><a href="http://www.uucall.com/showNews.do?id=17"
		target="_blank">安卓版全新升级，省流量更清晰！</a></li>
	<li class="spc_news"><a href="http://www.uucall.com/showNews.do?id=16"
		target="_blank">UUCall手机回拨套餐调整通告</a></li>
	<li><a href="http://www.uucall.com/showNews.do?id=14" target="_blank">聊否并入UUCall，服务不变音质更佳</a></li>
	<li><a href="http://www.uucall.com/pay/biz.do?id=14" target="_blank">充话费送话费，最高赠送600元！</a></li>
	<li><a href="http://www.uucall.com/pay/sale4.html" target="_blank">新手体验套餐尊享5折，限量抢购中...</a></li>
	<!--<li><a href="http://www.uucall.com/pay/sale4.html">包月特卖话费低至0.05元/分钟</a></li>-->
	<!--<li><a href="http://www.uucall.com/phonecall.do" target="_blank">赞！手机也可以用UUCall</a></li>-->
	<li><a href="http://www.uucall.com/showNews.do?id=8" target="_blank">积极配合相关部门，严厉打击网络非法…</a></li>
</ul>

</div>
</div>
</div>
</div>
<div id="maincon_r">
<div id="maincon_r_c">
<h3>最新促销</h3>

<ul>
	<li><a href="http://www.uucall.com/pay/biz.do?id=14" target="_blank"><font
		color="red">充话费送话费，最高赠送600元！</font></a></li>
	<!--<li><a href="http://www.uucall.com/pay/sale3.html" target="_blank">端午电话免费打，最高赠送888分钟！</a></li>-->
	<li><a href="http://www.uucall.com/pay/sale3.html" target="_blank">新手体验套餐尊享5折，限量抢购中...</a></li>
	<!--<li><a href="http://www.uucall.com/pay/sale4.html">包月特卖话费低至0.05元/分钟</a></li>-->
	<li><a href="http://www.uucall.com/phonecall.do" target="_blank">赞！手机也可以用UUCall</a></li>


	<!--		<h3>相关业务</h3>
				<a href="http://jifen.uucall.com/indexrace.do" target='_blank'><img src="http://image.uucall.cn:8180/aacall/account/image/z1.jpg" /></a>
				<a href="http://www.uucall.com/game/" target='_blank'><img src="http://image.uucall.cn:8180/aacall/account/image/z2.jpg" /></a>
				<a href="http://www.uucall.com/phonecall.do" target='_blank'><img src="http://image.uucall.cn:8180/aacall/account/image/z3.jpg" /></a>
		-->
	<h3>我有话说</h3>
	用得满意吗？
	<a href="http://www.uucall.com/feedback.html" target="_blank">提提您的意见</a>

</div>
</div>
<div class="clear"></div>
</div>
<div style="margin-bottom: 10px;"><img
	src="http://image.uucall.cn:8180/aacall/account/image/acc_index_new_07.jpg" /></div>

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

</script></div>
<div class="tfield" id="UserNameField" style="display: none;">

<h6><span>绑定邮箱</span><a href="javascript:void(0);" id="closebnt"
	onclick="OpenDiv(2)" title="关闭">关闭</a></h6>
<span class="toptips">建议使用常用邮箱方便找回密码该邮箱地址还能作为您的用户名</span>
<div class="input left"><label><font>*</font>&nbsp;邮箱地址：</label> <input
	type="text" class="input_other" id="U_UserName" value="请输入您常用的Email地址"
	tabindex="1" maxlength="30" name="name"
	onkeydown="if (event.keyCode==13)setUsername()" /></div>
<div class="msg attention left">
<p class="attention left" style="display: none;">请填写您的Email地址</p>
<p class="error left" style="display: none;" id="UserName_e"></p>
<p class="ok left" style="display: none;" id="UserName_s">可以提交</p>
</div>
<dl class="left boxbtn">
	<dd><label> <input type="button" name="button" id="buttonsub" value=""
		class="buttonsub" onclick="setUsername();" /> </label></dd>
	<dd><label> <input type="reset" name="button" id="buttonreset" value=""
		class="buttonreset" onclick="CloseDiv(1)" /> </label></dd>
</dl>
</div>
<div style="display: none;" id="backbox1" class="tfield">
<h6><span>绑定邮箱</span><a href="javascript:void(0);" title="关闭"
	onclick="G('backbox1').style.display='none';location.reload();">关闭</a></h6>
<p class="backbox1 backbox"><b>恭喜您，绑定成功</b><br />
<br />
<span>您的邮箱：<font color="red" id="emailname"></font>可作为用户名登入，并且通过该邮箱您还可以找回密码，请先开通密码找回功能！</span><br />
<a href="javascript:void(0);"
	onclick="G('backbox1').style.display='none';location.reload();"><img
	src="http://image.uucall.cn:8180/aacall/website/image/newfree/backbox_icon2.jpg" /></a>
</p>

</div>
</body>
</html>

