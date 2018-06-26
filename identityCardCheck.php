<?php
    require_once('connect.php');
    require_once('now_user.php');

     if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $username=$_POST['username'];
        $selectSex=$_POST['selectSex'];
        $identityCard=$_POST['identityCard'];
        $DOB=$_POST['DOB'];
        $nation=$_POST['nation'];
        $address=$_POST['address'];
        $time=date('Y-m-d H:i:s',time());

        if($username==""||$username=="请输入姓名"||$selectSex==""||$identityCard==""||$identityCard=="请输入身份证号"||$DOB==""||$DOB=="请输入出生日期"||$nation==""||$nation=="请输入民族"||$address==
        	""||$address=="请输入家庭住址"){
            echo "<script>alert('请输入完善的信息!');history.go(-1);</script>";
        }
        else{
            $sql_1="select ID from identitycard where ID='$now_account'";
            $result=mysqli_query($con,$sql_1);
            $row=mysqli_num_rows($result);
        	$sql="insert into identitycard(ID,name,sex,identityCard,DOB,nation,address,time) values ('$now_account','$username','$selectSex','$identityCard','$DOB','$nation','$address','$time')";
        	$sql_insert=mysqli_query($con,$sql);
        	if($sql_insert){
        		echo "<script>alert('申请成功!');history.go(-1);</script>";
        	}
        	else{
        		if($row){
            	    echo "<script>alert('当前账号只可以申请当前账号的身份证！'); history.go(-1);</script>";
                }
        		else
        			echo "<script>alert('申请失败!');history.go(-1);</script>";
        	}
        }
     }
?> 