<!DOCTYPE html>
<html>
<head>
	<title>登录</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
</head>
<link href="css/office.css" type="text/css" rel="stylesheet">
<body>
	<div class="top">欢迎登陆 行政管理系统</div>
	<div class="log">
	    <form id="login" name="login" method="post" action="login_officeCheck.php">
	        &nbsp;&nbsp;&nbsp;账 号: <input type="text" class="logAccount" name="account"/><br/>  
            &nbsp;&nbsp;&nbsp;密 码: <input type="password" class="logPassword" name="password"/> <br/>  
            <input type="submit" class="logSubmit" name="submit" id="submit" value="登录" />
	    </form>		
	    <a href="register.php" ><input type="submit" class="logSubmit" value="注册" /></a>
	</div>
</body>
</html>