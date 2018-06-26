<?php
    require_once('now_admin.php');
    $sql = "select * from infocustomer";
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
	<title>用户管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/customer.css" type="text/css" rel="stylesheet">
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
		<div><a href="customer.php">+用户管理</a></div>
		<div><a href="office_manage.php">+办公人员管理</a></div>
		<div><a href="office_add.php">+添加办公人员</a></div>
	</div>
	<div class="right">
		<div class="right_top">ID</div>
		<div class="right_top">用户</div>
		<div class="right_top">查看详情</div>
		<div class="right_top">操作</div><br/>
		<?php
		    if(empty($data)){	
			        ;
		    }else{
		    	foreach($data as $value){
		?>
		<div class="right_buttom"><?php echo $value['id'];?></div>
		<div class="right_buttom"><?php echo $value['name'];?></div>
		<div class="right_buttom"><a href="customer_details.php?id=<?php echo $value['id']?>">点击查看详情</a></div>
		<div class="right_buttom">
			<button><a href="customer_delete.php?id=<?php echo $value['id']?>">删除</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
	</div>
</body>
</html>