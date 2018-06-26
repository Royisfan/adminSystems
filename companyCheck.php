<?php
    require_once('connect.php');
    require_once('now_user.php');

     if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $companyName=$_POST['companyName'];
        $lawName=$_POST['lawName'];
        $lawIdentityCard=$_POST['lawIdentityCard'];
        $telNum=$_POST['telNum'];
        $lawAddress=$_POST['lawAddress'];
        $companyAddress=$_POST['companyAddress'];
        $Area=$_POST['Area'];
        $product=$_POST['product'];
        $describes=$_POST['describe'];
        $money=$_POST['money'];
        $time=date('Y-m-d H:i:s',time());

        if($companyName==""||$lawName==""||$lawIdentityCard==""||$telNum==""||$lawAddress==""||$companyAddress==""||$Area==""||$product==""||$money==""){
            echo "<script>alert('请输入完善的信息!');history.go(-1);</script>";
        }
        else{
            $sql_1="select ID from company where ID='$now_account'";
            $result=mysqli_query($con,$sql_1);
            $row=mysqli_num_rows($result);
        	$sql="insert into company(ID,companyName,lawName,lawIdentityCard,telNum,lawAddress,companyAddress,Area,product,describes,money,time) values ('$now_account','$companyName','$lawName','$lawIdentityCard','$telNum','$lawAddress','$companyAddress','$Area','$product','$describes','$money','$time')";
        	$sql_insert=mysqli_query($con,$sql);
        	if($sql_insert){
        		echo "<script>alert('申请成功!');history.go(-1);</script>";
        	}
        	else{
        		if($row){
            	    echo "<script>alert('一个账号只有一个注册公司资格资格'); history.go(-1);</script>";
                }
        		else
        			echo "<script>alert('申请失败!');history.go(-1);</script>";
        	}
        }
     }
?> 