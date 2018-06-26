<?php
    require_once('now_admin.php');
    $title=$_GET['title'];

    $sql = "select * from notice where title='$title'";
	$query = mysqli_query($con,$sql);

	$res=mysqli_fetch_array($query);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>修改</title>
	<link href="../css/webManagement.css" type="text/css" rel="stylesheet">
	<link href="../css/webNotice.css" type="text/css" rel="stylesheet">
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
		<div class="top_2_right">修改</div>
	</div>
	<div class="left">
		<div><a href="notice.php">+发布公告</a></div>
		<div><a href="notice_manage.php">+管理公告</a></div>
		<div><a href="message.php">+查看留言</a></div>
		<div><a href="question.php">+添加问题</a></div>
		<div><a href="question_manage.php">+管理问题</a></div>
	</div>
	<div class="right">
	    <form method="post" action="noticeCheck_1.php">
	    	标题：<br/><input class="title" type="text" name="title" value="<?php echo $res[0];?>"><br/><br/>
	    	内容：<br/><textarea class="context"  name="context"><?php echo $res[2];?></textarea><br/>
	    	<input id="submit" name="submit" class="submit" type="submit" value="提交"/>
	    </form>
	</div>
</html>