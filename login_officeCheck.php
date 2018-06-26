<?php
    require_once('connect.php');

    $account=$_POST['account'];
    $password=$_POST['password'];

    session_start();

    if(isset($_POST['submit'])&&$_POST['submit']=='登录'){
    	$sql="select name,password,status from info_office where name='$account' and password=$password";
    	$result=mysqli_query($con,$sql);
    	$num=mysqli_num_rows($result);
    	if($num){
    		$row=mysqli_fetch_array($result);
            $_SESSION['logined']=1; 
            $_SESSION['account']=$account; 
            $_SESSION['username']=$username;  
            if($row[2]==1)
                echo "<script>window.location.href='officeWorker/business.php';</script>";
            else if($row[2]==2)
                echo "<script>window.location.href='webManagement/notice.php';</script>"; 
            else
                 echo "<script>window.location.href='officeManagement/customer.php';</script>"; 
    	}
    	else{
    		echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";      
    	}
    }
    else
    	echo "<script>alert('提交未成功！'); history.go(-1);</script>";
?>