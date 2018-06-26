<?php
    require_once('now_admin.php');
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>添加管理员</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/office_add.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div><h2>行政管理系统</h2></div>
	</div>
	<div class="top_1">
		<div style="margin-left:1100px;"><strong>欢迎您<?php echo $res_all[0];?></strong></div>
		<div><img src="../images/1.png"><a href="office_add.php">刷新</a></div>
		<div><img src="../images/2.png"><a href="../login_office.php">退出</a></div>
	</div>
	<div class="top_2">
		<div class="top_2_left">操作</div>
		<div class="top_2_right">添加管理员</div>
	</div>
	<div class="left">
		<div><a href="customer.php">+用户管理</a></div>
		<div><a href="office_manage.php">+办公人员管理</a></div>
		<div><a href="office_add.php">+添加办公人员</a></div>
	</div>
	<div class="right">
	    <form method="post" action="office_addCheck.php">
	        <input type="text" name="name" value="请输入姓名"><br/>
	        <input type="text" name="password" value="请输入密码">	<br/>
	        <select name="select" size="1">
	        	<option value="1">办公人员
	        	<option value="2">网站管理员
	        	<option value="3">用户/办公人员管理员
	        </select><br/>
	        <input type="submit" class="submit" name="submit" value="提交"><br/>	
	    </form>
	</div>
</body>
</html>