<?php 
	require_once('now_user.php');
	$sql = "SELECT * FROM `order` WHERE ID='$now_account'";
	$result= mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>预约</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/notice.css" type="text/css" rel="stylesheet">
	<link href="css/order_1.css" type="text/css" rel="stylesheet">
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
	    <div class="right_top">
            <h3>选择预约日期（仅限于选择下周）</h3>
            <form name="login" method="post" action="orderCheck.php?id=<?php echo $now_account;?>">
            <select name="week">
                <option value="周一">周一</option>
                <option value="周二">周二</option>
                <option value="周三">周三</option>
                <option value="周四">周四</option>
                <option value="周五">周五</option>
                <option value="周六">周六</option>
                <option value="周日">周日</option>
            </select>  
            <select name="type">
                <option value="上午">上午</option>
                <option value="下午">下午</option>
            </select>  
            <input type="submit" class="submit" name="submit" value="提交" />
        </form>        
        </div>
        <div class="right_middle"><br/><br/><h3>您的预约时间是:</h3></div>
        <div class="right_buttom">
        &nbsp;&nbsp;&nbsp;&nbsp;
            <?php
                if($row[1]==""){
                    echo "未预约";
                }
                else{
                    echo $row[1];
                    echo $row[2];
                    echo $row[3].'点';
                }
            ?>
        </div>
	</div>
</body>
</html>