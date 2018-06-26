<?php
    require_once('now_admin.php');

    $id=$_GET['id'];
    $sql="select * from infocustomer where id='$id'";
    $result=mysqli_query($con,$sql);
    $res=mysqli_fetch_array($result);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>用户管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/customer_details.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div><h2>行政管理系统</h2></div>
	</div>
	<div class="top_1">
		<div style="margin-left:1100px;"><strong>欢迎您<?php echo $res_all[0];?></strong></div>
		<div><img src="../images/1.png"><a href="customer.php">刷新</a></div>
		<div><img src="../images/2.png"><a href="../login_office.php">退出</a></div>
	</div>
	<div class="top_2">
		<div class="top_2_left">操作</div>
		<div class="top_2_right">用户管理</div>
	</div>
	<div class="left">
		<div><a href="business.php">+用户管理</a></div>
		<div><a href="business_person.php">+办公人员管理</a></div>
		<div><a href="business_order.php">+添加办公人员</a></div>
	</div>
	<div class="right">
	    <div class="right_left">ID</div>
	    <div class="right_right"><?php echo $res[0];?></div><br/>
	    <div class="right_left">姓名</div>
	    <div class="right_right"><?php echo $res[1];?></div><br/>
	    <div class="right_left">电话</div>
	    <div class="right_right"><?php echo $res[2];?></div><br/>
	    <div class="right_left">住址</div>
	    <div class="right_right"><?php echo $res[3];?></div><br/>
	    <div class="right_left">亲子绑定</div>
	    <div class="right_right"><?php echo $res[4];?></div><br/>
	    <div class="right_left">信用</div>
	    <div class="right_right"><?php echo $res[6];?></div><br/>
	</div>
</body>
</html>