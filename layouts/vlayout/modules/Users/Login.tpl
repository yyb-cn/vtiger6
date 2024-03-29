{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
<!DOCTYPE html>
<html>
	<head>
		<title>Vtiger login page</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- for Login page we are added -->
		<link href="libraries/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="libraries/bootstrap/css/jquery.bxslider.css" rel="stylesheet" />
		<script src="libraries/jquery/jquery.min.js"></script>
		<script src="libraries/jquery/boxslider/jquery.bxslider.js"></script>
		<script src="libraries/jquery/boxslider/jquery.bxslider.min.js"></script>
		<script src="libraries/jquery/boxslider/respond.min.js"></script>
		<script>
			jQuery(document).ready(function(){
				scrollx = jQuery(window).outerWidth();
				window.scrollTo(scrollx,0);
				slider = jQuery('.bxslider').bxSlider({
				auto: true,
				pause: 4000,
				randomStart : true,
				autoHover: true
			});
			jQuery('.bx-prev, .bx-next, .bx-pager-item').live('click',function(){ slider.startAuto(); });
			}); 
		</script>
	</head>
	<body>
		<div class="container-fluid login-container">
			<div class="row-fluid">
				<div class="span3">
					<div class="logo"><img src="layouts/vlayout/skins/images/logo.png">
					<br />
					<a target="_blank" href="http://{$COMPANY_DETAILSCOMPANY_DETAILS.website}">{$COMPANY_DETAILS.name}</a>
					</div>
				</div>
			</div>
			<div class="row-fluid">
				<div class="span12">
					<div class="content-wrapper">
						<div class="container-fluid">
							<div class="row-fluid">
								<div class="span6">
									<div class="carousal-container">
										<div><h2> 让自己每天进步一点点 </h2></div>
										<ul class="bxslider">
											<li>
												<div id="slide01" class="slide">
													<img class="pull-left" src="{vimage_path('come_on_01.png')}">
												</div>
											</li>
											<li>
												<div id="slide02" class="slide">
													<img class="pull-left" src="{vimage_path('come_on_02.png')}">
												</div>
											</li>
											<li>
												<div id="slide03" class="slide">
													<img class="pull-left" src="{vimage_path('come_on_03.png')}">
												</div>
											</li>
											<li>
												<div id="slide04" class="slide">
													<img class="pull-left" src="{vimage_path('come_on_04.png')}">
												</div>
											</li>
											<li>
												<div id="slide05" class="slide">
													<img class="pull-left" src="{vimage_path('come_on_05.png')}">
												</div>
											</li>
										</ul>
									</div>
								</div>
								<div class="span6">
									<div class="login-area">
										<div class="login-box" id="loginDiv">
											<div class="">
												<h3 class="login-header">管&nbsp;&nbsp;理&nbsp;&nbsp;登&nbsp;&nbsp;录</h3>
											</div>
											<form class="form-horizontal login-form" style="margin:0;" action="index.php?module=Users&action=Login" method="POST">
												{if isset($smarty.request.error)}
													<div class="alert alert-error">
														<p>Invalid username or password.</p>
													</div>
												{/if}
												{if isset($smarty.request.fpError)}
													<div class="alert alert-error">
														<p>Invalid Username or Email address.</p>
													</div>
												{/if}
												{if isset($smarty.request.status)}
													<div class="alert alert-success">
														<p>Mail was send to your inbox, please check your e-mail.</p>
													</div>
												{/if}
												{if isset($smarty.request.statusError)}
													<div class="alert alert-error">
														<p>Outgoing mail server was not configured.</p>
													</div>
												{/if}
												<div class="control-group">
													<label class="control-label" for="username"><b>用户名</b></label>
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="请输入用户名">
													</div>
												</div>

												<div class="control-group">
													<label class="control-label" for="password"><b>密码</b></label>
													<div class="controls">
														<input type="password" id="password" name="password" placeholder="请输入密码">
													</div>
												</div>
												<div class="control-group signin-button">
													<div class="controls" id="forgotPassword">
														<button type="submit" class="btn btn-primary sbutton">登&nbsp;&nbsp;陆</button>
														&nbsp;&nbsp;&nbsp;<a>忘记密码？</a>
													</div>
												</div>
												{* Retain this tracker to help us get usage details *}
												<img src='//stats.vtiger.com/stats.php?uid={$APPUNIQUEKEY}&v={$CURRENT_VERSION}&type=U' alt='' title='' border=0 width='1px' height='1px'>
											</form>
											<div class="login-subscript">
												<small> 浦发财富客户管理系统 {$CURRENT_VERSION}</small>
											</div>
										</div>
										
										<div class="login-box hide" id="forgotPasswordDiv">
											<form class="form-horizontal login-form" style="margin:0;" action="forgotPassword.php" method="POST">
												<div class="">
													<h3 class="login-header">Forgot Password</h3>
												</div>
												<div class="control-group">
													<label class="control-label" for="username"><b>User name</b></label>
													<div class="controls">
														<input type="text" id="username" name="username" placeholder="Username">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label" for="email"><b>Email</b></label>
													<div class="controls">
														<input type="text" id="email" name="email"  placeholder="Email">
													</div>
												</div>
												<div class="control-group signin-button">
													<div class="controls" id="backButton">
														<input type="submit" class="btn btn-primary sbutton" value="Submit" name="retrievePassword">
														&nbsp;&nbsp;&nbsp;<a>Back</a>
													</div>
												</div>
											</form>
										</div>
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="navbar navbar-fixed-bottom">
			<div class="navbar-inner">
				<div class="container-fluid">
					<div class="row-fluid">
						<div class="span6 pull-left" >
							<div class="footer-content">
								<small>&#169 2004-{date('Y')}&nbsp;
									<a href="https://www.vtiger.com"> vtiger.com</a> | 
									<a href="javascript:mypopup();">Read License</a> | 
									<a href="https://www.vtiger.com/products/crm/privacy_policy.html">Privacy Policy</a> </small>
							</div>
						</div>
						<div class="span6 pull-right" >
							<div class="pull-right footer-icons">
								<small>{vtranslate('LBL_CONNECT_WITH_US', $MODULE)}&nbsp;</small>
								<a href="https://www.facebook.com/vtiger"><img src="layouts/vlayout/skins/images/facebook.png"></a>
								&nbsp;<a href="https://twitter.com/vtigercrm"><img src="layouts/vlayout/skins/images/twitter.png"></a>
								&nbsp;<a href="#"><img src="layouts/vlayout/skins/images/linkedin.png"></a>
								&nbsp;<a href="http://www.youtube.com/user/vtigercrm"><img src="layouts/vlayout/skins/images/youtube.png"></a> 
							</div>
						</div>
					</div>   
				</div>    
			</div>   
		</div>
	</body>
	<script>
		jQuery(document).ready(function(){
			jQuery("#forgotPassword a").click(function() {
				jQuery("#loginDiv").hide();
				jQuery("#forgotPasswordDiv").show();
			});
			
			jQuery("#backButton a").click(function() {
				jQuery("#loginDiv").show();
				jQuery("#forgotPasswordDiv").hide();
			});
			
			jQuery("input[name='retrievePassword']").click(function (){
				var username = jQuery('#user_name').val();
				var email = jQuery('#emailId').val();
				
				var email1 = email.replace(/^\s+/,'').replace(/\s+$/,'');
				var emailFilter = /^[^@]+@[^@.]+\.[^@]*\w\w$/ ;
				var illegalChars= /[\(\)\<\>\,\;\:\\\"\[\]]/ ;
				
				if(username == ''){
					alert('Please enter valid username');
					return false;
				} else if(!emailFilter.test(email1) || email == ''){
					alert('Please enater valid email address');
					return false;
				} else if(email.match(illegalChars)){
					alert( "The email address contains illegal characters.");
					return false;
				} else {
					return true;
				}
				
			});
		});
	</script>
</html>	
{/strip}
