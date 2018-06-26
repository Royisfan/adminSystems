<?php
    require_once('now_admin.php');
    $sql = "select * from question";
	$query = mysqli_query($con,$sql);

	if($query&&mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>管理问题</title>
	<link href="../css/webManagement.css" type="text/css" rel="stylesheet">
	<link href="../css/notice_manage.css" type="text/css" rel="stylesheet">
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
		<div class="top_2_right">管理问题</div>
	</div>
	<div class="left">
		<div><a href="notice.php">+发布公告</a></div>
		<div><a href="notice_manage.php">+管理公告</a></div>
		<div><a href="message.php">+查看留言</a></div>
		<div><a href="question.php">+添加问题</a></div>
		<div><a href="question_manage.php">+管理问题</a></div>
	</div>
	<div class="right">
		<div class="right_top">标题</div>
		<div class="right_top">内容</div>
		<div class="right_top">操作</div><br/>
		<?php
		    if(empty($data)){	
			        ;
		    }else{
		    	foreach($data as $value){
		?>
		<div class="right_buttom"><?php echo $value['title']?></div>
		<div class="right_buttom"><a href="question_show.php?context=<?php echo $value['context']?>">点击查看内容</a></div>
		<div class="right_buttom">
			<button><a href="question_delete.php?context=<?php echo $value['context'] ?>">删除</a></button>
			<button><a href="question_handle.php?context=<?php echo $value['context'] ?>">修改</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
	</div>
</body>
</html>