<?php
    require_once('now_admin.php');
    $sql = "SELECT * FROM `order`";
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
	<title>预约业务管理</title>
	<link href="../css/business.css" type="text/css" rel="stylesheet">
	<link href="../css/business_.css" type="text/css" rel="stylesheet">
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
		<div class="top_2_right">预约业务管理</div>
	</div>
	<div class="left">
		<div><a href="business.php">+公司业务管理</a></div>
		<div><a href="business_person.php">+个人业务管理</a></div>
		<div><a href="business_order.php">+预约业务管理</a></div>
	</div>
	<div class="right">
		<div class="right_top">id</div>
		<div class="right_top">预约时间</div>
		<div class="right_top">是否到来</div><br/>
		<?php
		    if(empty($data)){	
			        ;
		    }else{
		    	foreach($data as $value){
		?>
		<div class="right_buttom"><?php echo $value['ID']?></div>
		<div class="right_buttom"><?php echo $value['time1'].$value['time2'].$value['time3']."点";?></div>
		<div class="right_buttom">
			<button><a href="business_order_y.php?ID=<?php echo $value['ID'];?>">是</a></button>
			<button><a href="business_order_n.php?ID=<?php echo $value['ID'];?>">否</a></button>
		</div><br/>
		<?php
		    }
		        }
		?>
	</div>
</body>
</html>