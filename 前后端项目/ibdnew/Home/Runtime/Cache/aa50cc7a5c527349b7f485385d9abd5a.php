<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Kode is a Premium Bootstrap Admin Template, It's responsive, clean coded and mobile friendly">
  <meta name="keywords" content="bootstrap, admin, dashboard, flat admin template, responsive," />
  <link   rel= "shortcut icon"   href= "/ibdnew/PUBLIC/img/logo.png">
  <title>IBD-登录</title>

  <!-- ========== Css Files ========== -->
  <link href="/ibdnew/PUBLIC/css/root.css" rel="stylesheet">
  <style type="text/css">
    body{background: #F5F5F5;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="javascript:Check_Login()">
        <div class="top">
          <img src="/ibdnew/PUBLIC/img/logo.png" alt="icon" class="icon">
          <h1>IBD</h1>
          <h4>For Life,For Future.</h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" id="username" class="form-control" placeholder="用户名">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password"  id="password" class="form-control" placeholder="密码">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> 记住我</label>
          </div>
          <button type="submit" class="btn btn-default btn-block">登录</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="/ibdnew/index.php/index/registerPage"><i class="fa fa-external-link"></i> 注册</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> 忘记密码</a></div>
      </div>
    </div>
	
	
	<!-- ================================================
	jQuery Library
	================================================ -->
	<script type="text/javascript" src="/ibdnew/PUBLIC/js/jquery.min.js"></script>

	<!-- ================================================
	Bootstrap Core JavaScript File
	================================================ -->
	<script src="/ibdnew/PUBLIC/js/bootstrap/bootstrap.min.js"></script>

	<!-- ================================================
	Plugin.js - Some Specific JS codes for Plugin Settings
	================================================ -->
	<script type="text/javascript" src="/ibdnew/PUBLIC/js/plugins.js"></script>

	<!-- ================================================
	Sweet Alert
	================================================ -->
	<script src="/ibdnew/PUBLIC/js/sweet-alert/sweet-alert.min.js"></script>

	<!-- ================================================
	Kode Alert
	================================================ -->
	<script src="/ibdnew/PUBLIC/js/kode-alert/main.js"></script>
	
	<!-- ================================================
	md5
	================================================ -->
	<script src="/ibdnew/PUBLIC/js/md5.js"></script>
	
	<script type = "text/javascript">
		
	
		function Check_Login()
		{
			var username = $('#username').val();
			var pwd = $('#password').val();
			var correct = 1;
			var inf = "";
			if (username.length < 6 || username.length > 16)
			{
				inf += "用户名长度在6-16之间"+"\n";
				correct = 0;
			}
			if (pwd.length < 6 || pwd.length > 16) 
			{
				inf += "密码长度应在6-16之间";
				correct = 0;
			}
			if (correct == 0)	
			{
				swal("登录错误",inf,"error");
			}
			else if (correct == 1)
			{
				$.ajax({
					type : "post",
					url : "/ibdnew/index.php/login/login",
					data : "username="+username+"&pwd="+hex_md5(pwd),
					success : function s(data)
					{
						if (data.status == "failed")
						{
						
							swal("登录错误",data.reason,"error");
						}
						else
						{
							window.location.href = "/ibdnew/index.php";
						}
					}
				});
			}
		}
	</script>
</body>
</html>