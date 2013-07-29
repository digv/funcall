<?php
session_start ();
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
<link rel="stylesheet" href="/css/style.css"
	type="text/css" />
<link rel="stylesheet"
	href="/css/logged.css" type="text/css" />
</head>

<body>
	<div id="wrap"> <!-- wrap start -->
		
		<div id="header" style="position:relative; z-index:1000;"> <!-- header start -->
		
			<div class="nav-top" style="height:80px;overflow:hidden;"> <!-- nav-top s -->
				<h1 id="logo" style="float: left; padding:10px 0px 0px 10px;">
					<a title="UUCall网络电话" href="http://www.uucall.com">
							<img alt="UUCall网络电话" src="http://image.uucall.cn:8180/aacall/website/image/logo.jpg">
					</a>
				</h1>
			</div> <!-- nav-top E -->
			
			<div class="clear"></div>
			
			<div id="top_banner">
				<div id="top_banner_l"></div>
					
					<div id="top_banner_c">
						<div id="navList">
							<a class="top_banner_on0" href="/">首页</a>
						</div>
					</div>
					
				<div id="top_banner_r"></div>
				
			</div>
			
			<div class="clear"></div>
		
		</div><!-- header ends -->
		
		<div class="clear"></div>
		
		<div>
			<img src="/images/acc_index_new_03.jpg">
		</div>
		
		<div id="maincon" style="margin-bottom:0px;"> <!-- maincon S -->
		
			<div id="maincon_l"> <!-- maincon_l S -->
			
				<div id="maincon_l_c">
				
					<div id="maincon_c_l">
						<h1 id="maincon_c_l_h1">
							<a href="/">我的帐户首页</a>
						</h1>
						
						<ul id="left_menu_one">
						
							<li class="account_btn_on0">拨打一对一电话 </li>
							<li class="account_btn_on0">电话会议 </li>
						</ul>
					</div>
					
					<div id="maincon_l_c_r">
						
						<div id="maincon_l_c_r_con">
							<div id="welcome"> welcome </div>
						</div>
						
					</div>
					
				</div>
			
			</div> <!-- maincon_l E -->
			
			<div id="maincon_r"> <!-- maincon_r S -->
		
			</div> <!-- maincon_r E-->
			
			
		</div> <!-- maincon E -->
		
	</div> <!-- wrap ends -->
</body>
</html>

