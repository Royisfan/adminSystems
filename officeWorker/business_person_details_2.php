<?php
    require_once('now_admin.php');
	$ID=$_GET['ID'];
	$sql="select * from car where ID='$ID'";
	$result=mysqli_query($con,$sql);
	$res=mysqli_fetch_array($result);
	$status=$res[4];
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>个人业务管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/details.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div><h2>行政管理系统</h2></div>
	</div>
	<div class="top_1">
		<div style="margin-left:1100px;"><strong>欢迎您<?php echo $res_all[0];?></strong></div>
		<div><img src="../images/1.png"><a href="business.php">刷新</a></div>
		<div><img src="../images/2.png"><a href="../login_office.php">退出</a></div>
	</div>
	<div class="top_2">
		<div class="top_2_left">管理员</div>
		<div class="top_2_right">公司业务管理</div>
	</div>
	<div class="left">
		<div><a href="business.php">+公司业务管理</a></div>
		<div><a href="business_person.php">+个人业务管理</a></div>
		<div><a href="business_order.php">+预约业务管理</a></div>
	</div>
	<div class="right">
	    <div class="right_top">
	    	姓名：<?php echo $res[1];?><br/>
	    	电话：<?php echo $res[2];?><br/>
	    	邮箱：<?php echo $res[3];?><br/>
	    	机动车驾驶证号码：<?php echo $res[5];?><br/>
	    </div>
	    <div>
	        <button class="button_1"><a href="business_personCheck_3.php?ID=<?php echo $res['0']?>;">同意</a></button>
	        <button class="button_2"><a href="business_personCheck_4.php?ID=<?php echo $res['0']?>;">拒绝</a></button>
	    </div>
	</div>
</body>
</html>