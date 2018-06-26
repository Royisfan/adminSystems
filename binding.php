<?php 
	require_once('now_user.php');
	$sql = "select ID_1 from binding where ID='$now_account';";
	$result= mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>绑定</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/notice.css" type="text/css" rel="stylesheet">
	<link href="css/binding.css" type="text/css" rel="stylesheet">
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
	</div>
	<div class="right">
        <h3>已绑定用户：<a href="binding_details_Check.php?account=<?php echo $row[0];?>"><?php echo $row[0];?></a>(点击进行管理)</h3>
        <h3>添加绑定用户：</h3>
        <form name="add" method="post" action="bindingCheck.php">
            <input type="text" name="account" value"账号">
            <input type="password"  name="password" value="密码">
            <input class="submit" name="submit" type="submit" value="添加">
        </form>
	</div>
</body>
</html>