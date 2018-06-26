<?php
    require_once('now_admin.php');
    $sql = "select * from identitycard";
	$query = mysqli_query($con,$sql);

	if($query&&mysqli_num_rows($query)){
		while($row = mysqli_fetch_assoc($query)){
			$data[] = $row;
		}
	}

	$sql_1 = "select * from car";
	$query_1 = mysqli_query($con,$sql_1);

	if($query_1&&mysqli_num_rows($query_1)){
		while($row_1 = mysqli_fetch_assoc($query_1)){
			$data_1[] = $row_1;
		}
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>个人业务管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/business_person.css" type="text/css" rel="stylesheet">
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
		<div class="top_2_right">个人业务管理</div>
	</div>
	<div class="left">
		<div><a href="business.php">+公司业务管理</a></div>
		<div><a href="business_person.php">+个人业务管理</a></div>
		<div><a href="business_order.php">+预约业务管理</a></div>
	</div>
    <div class="right">
	    <div class="right_top">业务类型</div>
		<div class="right_top">姓名</div>
		<div class="right_top">申请时间</div>
		<div class="right_top">处理状态</div>
		<div class="right_top">操作</div><br/>
		<?php
		    if(empty($data)){	
			        ;
		    }else{
		    	foreach($data as $value){
		    		if($value['status']==0)
		    			$value['status']="未处理";
		    		else if($value['status']==1)
		    			$value['status']="已同意";
		    		else 
		    			$value['status']="已拒绝";
		?>
		<div class="right_buttom"><?php echo "身份证办理业务"?></div>
		<div class="right_buttom"><?php echo $value['name']?></div>
		<div class="right_buttom"><?php echo $value['time']?></div>
		<div class="right_buttom"><?php echo $value['status']?></div>
		<div class="right_buttom">
			<button><a href="business_person_details_1.php?ID=<?php echo $value['ID']?>;">详情/审核</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
		<?php
		    if(empty($data_1)){	
			        ;
		    }else{
		    	foreach($data_1 as $value_1){
		    		if($value_1['status']==0)
		    			$value_1['status']="未处理";
		    		else if($value_1['status']==1)
		    			$value_1['status']="已同意";
		    		else 
		    			$value_1['status']="已拒绝";
		?>
		<div class="right_buttom"><?php echo "机动车办理业务"?></div>
		<div class="right_buttom"><?php echo $value_1['name']?></div>
		<div class="right_buttom"><?php echo $value_1['time']?></div>
		<div class="right_buttom"><?php echo $value_1['status']?></div>
		<div class="right_buttom">
			<button><a href="business_person_details_2.php?ID=<?php echo $value_1['ID']?>;">详情/审核</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
	</div>
</body>
</html>