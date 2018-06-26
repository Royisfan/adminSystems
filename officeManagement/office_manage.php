<?php
    require_once('now_admin.php');
    $sql = "select * from info_office";
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
	<title>办公管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/customer.css" type="text/css" rel="stylesheet">
</head>
<body>
	<div class="top">
		<div><h2>行政管理系统</h2></div>
	</div>
	<div class="top_1">
		<div style="margin-left:1100px;"><strong>欢迎您<?php echo $res_all[0];?></strong></div>
		<div><img src="../images/1.png"><a href="office_manage.php">刷新</a></div>
		<div><img src="../images/2.png"><a href="../login_office.php">退出</a></div>
	</div>
	<div class="top_2">
		<div class="top_2_left">操作</div>
		<div class="top_2_right">办公人员管理</div>
	</div>
	<div class="left">
		<div><a href="customer.php">+用户管理</a></div>
		<div><a href="office_manage.php">+办公人员管理</a></div>
		<div><a href="office_add.php">+添加办公人员</a></div>
	</div>
	<div class="right">
		<div class="right_top">ID</div>
		<div class="right_top">名称</div>
		<div class="right_top">类别</div>
		<div class="right_top">操作</div><br/>
		<?php
		    if(empty($data)){	
			        ;
		    }else{
		    	foreach($data as $value){
		    		if($value['status']==1){
		    			$value['status']="办公人员";
		    		}
		    		else if($value['status']==2){
		    			$value['status']="网站管理员";
		    		}
		    		else{
		    			$value['status']="用户/办公人员管理员";
		    		}
		?>
		<div class="right_buttom"><?php echo $value['ID'];?></div>
		<div class="right_buttom"><?php echo $value['name'];?></div>
		<div class="right_buttom"><?php echo $value['status'];?></div>
		<div class="right_buttom">
			<button><a href="office_delete.php?ID=<?php echo $value['ID']?>">删除</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
	</div>
</body>
</html>