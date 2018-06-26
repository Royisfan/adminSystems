<?php 
	require_once('now_user.php');
    $title=$_GET['title'];
    $sql = "select * from notice where title='$title'";
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
	<title>公告</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/notice.css" type="text/css" rel="stylesheet">
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
	<div class="right">
        <table width="200" border="0" class="table" cellpadding="0" cellspacing="0">
            <div>
                <div style="text-align:center;"><h2><?php echo $title?></h2></div>
            </div>
            <?php
                if(empty($data)){   
                    echo "当前没有问题";
                }else{
                    foreach($data as $value){
            ?>
            <div class="answer"><br/>
                <div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $value['time']?></div><hr/>&nbsp;&nbsp;
                <div>&nbsp;&nbsp;<?php echo $value['text']?></div><br/>
            </div>
            <?php
                }
                    }
            ?>
        </table>
	</div>
</body>
</html>