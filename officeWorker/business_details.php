<?php
    require_once('now_admin.php');
    $sql = "select * from company";
	$query = mysqli_query($con,$sql);
	$ID=$_GET['ID'];
	$sql="select * from company where ID=$ID";
	$result=mysqli_query($con,$sql);
	$res=mysqli_fetch_array($result);
	$status=$res[11];
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>公司业务管理</title>
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
	    	公司名称：<?php echo $res[1];?><br/>
	    	法人姓名：<?php echo $res[2];?><br/>
	    	电话：<?php echo $res[4];?><br/>
	    	公司地址：<?php echo $res[6];?><br/>
	    	经营范围：<?php echo $res[7];?><br/>
	    	注册资金：<?php echo $res[10];?><br/>
	    	描述：<?php echo $res[9];?><br/>
	    </div>
	    <div>
	        <button class="button_1"><a href="businessCheck_1.php?ID=<?php echo $res['0']?>;">同意</a></button>
	        <button class="button_2"><a href="businessCheck_2.php?ID=<?php echo $res['0']?>;">拒绝</a></button>
	    </div>
	</div>
</body>
</html>