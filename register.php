<!DOCTYPE html>
<html>
<head>
	<title>注册</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<link href="css/main.css" type="text/css" rel="stylesheet">
<body>
	<div class="top">欢迎登陆 行政管理系统</div>
	<div class="register">
	    <form id="login" name="login" method="post" action="regCheck.php">
	        &nbsp;&nbsp;&nbsp;账  号: <input type="text" class="registerAccount" name="account"/><br/>  
	        &nbsp;&nbsp;&nbsp;用户名：<input type="text" class="registerUsername" name="username"/><br/>  
            &nbsp;&nbsp;&nbsp;电  话: <input type="text" class="registerTelphone" name="telphone"/><br/>  
            &nbsp;&nbsp;&nbsp;密  码: <input type="password" class="registerPassword" name="password"/> <br/>  
            &nbsp;&nbsp;&nbsp;确认密码：<input type="password" class="registerConfirm" name="confirm"/>  <br/>  
            <input type="submit" class="registerSubmit" name="submit" value="注册"/>  
	</div>
</body>
</html>