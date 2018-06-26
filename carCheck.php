<?php
    require_once('connect.php');
    require_once('now_user.php');

     if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $username=$_POST['username'];
        $carNumber=$_POST['carNumber'];
        $telNum=$_POST['telNum'];
        $email=$_POST['email'];
        $time=date('Y-m-d H:i:s',time());

        if($username==""||$username=="请输入姓名"||$carNumber==""||$carNumber=="请输入驾驶证号"||$telNum==""||$telNum=="请输入电话号码"||$email==""||$email=="请输入电子邮箱"){
            echo "<script>alert('请输入完善的信息!');history.go(-1);</script>";
        }
        else{
            $sql_1="select ID from car where ID='$now_account'";
            $result=mysqli_query($con,$sql_1);
            $row=mysqli_num_rows($result);
        	$sql="insert into car(ID,name,telNum,email,carNumber,time) values ('$now_account','$username','$telNum','$email','$carNumber','$time')";
        	$sql_insert=mysqli_query($con,$sql);
        	if($sql_insert){
        		echo "<script>alert('申请成功!');history.go(-1);</script>";
        	}
        	else{
        		if($row){
            	    echo "<script>alert('一个账号只可以申请一次机动车资格'); history.go(-1);</script>";
                }
        		else
        			echo "<script>alert('申请失败!');history.go(-1);</script>";
        	}
        }
     }
?> 