<?php
    require_once('now_user.php');
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>查询业务进度</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/process.css" type="text/css" rel="stylesheet">
	<link href="css/webwidget_menu_vertical_menu1.css" rel="stylesheet" type="text/css"></link>
    <script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="js/webwidget_menu_vertical_menu1.js"></script>
	<script language="javascript" type="text/javascript">
        $(function() {
            $(".webwidget_menu_vertical_menu1").webwidget_menu_vertical_menu1({
                style_color: 'red',
                font_color: '#666',
                font_decoration: 'none',
                animation_speed: 'normal',
                directory: 'images'
            });
        });
    </script>
</script> 
</head>
<body>
	<div class="top">
	    <div class="left">网上政务大厅</div>
	    <div class="right">当前用户：<?php echo $now_username;?>&nbsp;<a href="mainpage.php">退出</a></div>
    </div>
	<div class="left">
	        <div class="webwidget_menu_vertical_menu1">
            <ul>
                <li class="top_border"></li>
                <li></li>
                <li><a href="mainpage_1.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;主页</a></li>
                <li></li>
                <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;业务办理</a>
                    <ul>
                        <li class="top_border"></li>
                        <li><a href="identityCard.php">身份证办理</a></li>
                        <li><a href="company.php">公司业务办理</a></li>
                        <li><a href="car.php">机动车指标申请</a></li>
                        <li class="bottom_border"></li>
                    </ul>
                </li>
                <li></li>
                <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;查询</a>
                    <ul>
                        <li class="top_border"></li>
                        <li><a href="process.php">业务进度查询</a></li>
                        <li><a href="question.php">常见问题查询</a></li>
                        <li class="bottom_border"></li>
                    </ul>
                </li>
                <li></li>
                <li><a href="notice.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;公告</a></li>
                <li></li>
                <li><a href="order.php">&nbsp;&nbsp;&nbsp;&nbsp;预约业务</a></li>
                <li></li>
                <li><a href="binding.php">&nbsp;&nbsp;&nbsp;&nbsp;亲子绑定</a></li>
                <li></li>
                <li><a href="messageBoard.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;留言</a></li>
                <li></li>
                <li class="bottom_border"></li>
        </div>
	</div>
	<div class="right">
	    <div style="text-align:center;"><h1>业务办理状态</h1></div>
	    <?php
	        $sql="select * from identitycard where id=$now_account";
	        $query=mysqli_query($con,$sql);
	        if($query&&mysqli_num_rows($query)){
	        	$row=mysqli_fetch_assoc($query);
	        }
	        else{
	        	$row['ID']="";
	        	$row['name']="";
	        	$row['sex']="";
	        	$row['status']="";
	        }
	        if($row['status']=='0')
	        	$row['status']="待处理";
	        else if($row['status']=='1')
	        	$row['status']="已处理";
	        else
                $row['status']="已拒绝";
	    ?>
		<div class="right_"><h4>身份证办理业务</h4></div>
		<div class="show_1">
			<div>
				<div class="show_">ID</div>
				<div class="show_">姓名</div>
				<div class="show_">身份证号</div>
				<div class="show_">状态</div>
			<div><br/><hr/>
			<div>
				<div class="show_"><?php echo $row['ID'];?></div>
				<div class="show_"><?php echo $row['name'];?></div>
				<div class="show_"><?php echo $row['sex'];?></div>
				<div class="show_"><?php echo $row['status'];?></div>
			</div>
		</div><br/>
		<?php
	        $sql="select * from company where id=$now_account";
	        $query=mysqli_query($con,$sql);
	        if($query&&mysqli_num_rows($query)){
	        	$row=mysqli_fetch_assoc($query);
	        }
	         else{
	        	$row['ID']="";
	        	$row['companyName']="";
	        	$row['status']="";
	        }
	        if($row['status']=='0')
	        	$row['status']="待处理";
	        else if($row['status']=='1')
	        	$row['status']="已处理";
	        else
                $row['status']="已拒绝";
	    ?>
		<div class="right_2"><h4>公司业务</h4></div>
		<div class="show_2">
			<div>
				<div class="show_">ID</div>
				<div class="show_">公司名称</div>
				<div class="show_">状态</div>
			<div><br/><hr/>
			<div>
				<div class="show_"><?php echo $row['ID'];?></div>
				<div class="show_"><?php echo $row['companyName'];?></div>
				<div class="show_"><?php echo $row['status'];?></div>
			</div>
		</div><br/>
		<?php
	        $sql="select * from car where id=$now_account";
	        $query=mysqli_query($con,$sql);
	        if($query&&mysqli_num_rows($query)){
	        	$row=mysqli_fetch_assoc($query);
	        }
	         else{
	        	$row['ID']="";
	        	$row['name']="";
	        	$row['status']="";
	        }
	        if($row['status']=='0')
	        	$row['status']="待处理";
	        else if($row['status']=='1')
	        	$row['status']="已处理";
	        else
                $row['status']="已拒绝";
	    ?>
		<div class="right_3"><h4>机动车指标业务</h4></div>
		<div class="show_3">
			</div>
				<div class="show_">ID</div>
				<div class="show_">车主姓名</div>
				<div class="show_">状态</div>
			</div><br/><hr/>
			</div>
				<div class="show_"><?php echo $row['ID'];?></div>
				<div class="show_"><?php echo $row['name'];?></div>
				<div class="show_"><?php echo $row['status'];?></div>
			</div><br/>
		</div>
	</div>
</body>
</html>