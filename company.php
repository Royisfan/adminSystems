<?php
    require_once('now_user.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<title>公司业务</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/front.css" type="text/css" rel="stylesheet">
	<link href="css/company.css" type="text/css" rel="stylesheet">
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
		<div class="middle">
		    <form id="login" name="login" method="post" action="companyCheck.php">
	            <input type="text" name="companyName" value="公司名称"/> 
                <input type="text" name="lawName" value="法人姓名"/><br/>
                <input type="text" name="lawIdentityCard" value="法人身份证号"/>
                <input type="text" name="telNum" value="电话号码"/><br/> 
                <input type="text" name="lawAddress" value="法人家庭住址"/> 
                <input type="text" name="companyAddress" value="公司地址"/><br/> 
                <input type="text" name="Area" value="经营范围"/> 
                <input type="text" name="product" value="经营产品"/><br/> 
                <input type="text" name="describes" value="公司描述"/> 
                <input type="text" name="money" value="注册资金"/><br/> 
                <input type="submit" name="submit" id="submit" value="提交" />
	        </form>
		</div>
		<br/><br/>
	</div>
</body>
</html>