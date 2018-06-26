<?php
    require_once('now_admin.php');
    $context=$_GET['context'];

    $sql = "select * from question where context='$context'";
	$query = mysqli_query($con,$sql);
    $res=mysqli_fetch_array($query);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>查看问题</title>
	<link href="../css/webManagement.css" type="text/css" rel="stylesheet">
	<link href="../css/question_show.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div><h2>行政管理系统</h2></div>
	</div>
	<div class="top_1">
		<div style="margin-left:1100px;"><strong>欢迎您<?php echo $res_all[0];?></strong></div>
		<div><img src="../images/1.png"><a href="notice.php">刷新</a></div>
		<div><img src="../images/2.png"><a href="../login_office.php">退出</a></div>
	</div>
	<div class="top_2">
		<div class="top_2_left">管理员</div>
		<div class="top_2_right">查看问题</div>
	</div>
	<div class="left">
		<div><a href="notice.php">+发布公告</a></div>
		<div><a href="notice_manage.php">+管理公告</a></div>
		<div><a href="message.php">+查看留言</a></div>
		<div><a href="question.php">+添加问题</a></div>
		<div><a href="question_manage.php">+管理问题</a></div>
	</div>
	<div class="right">
	    <div class="right_top">Q:&nbsp;&nbsp;&nbsp;<?php echo $res[0];?></div>
	    <div class="right_buttom">A:&nbsp;&nbsp;&nbsp;<?php echo $res[1];?></div>
	</div>
</body>
</html>