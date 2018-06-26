<?php
    require_once('connect.php');

    $account=$_POST['account'];
    $password=$_POST['password'];

    session_start();

    if(isset($_POST['submit'])&&$_POST['submit']=='登录'){
    	$sql="select id,password from infocustomer where id=$account and password=$password";
    	$result=mysqli_query($con,$sql);
    	$num=mysqli_num_rows($result);
    	if($num){
    		$row=mysqli_fetch_array($result);
            $_SESSION['logined']=1; 
            $_SESSION['account']=$account; 
            $_SESSION['username']=$username;  
    		echo "<script>window.location.href='mainpage_1.php';</script>";
    	}
    	else{
    		echo "<script>alert('用户名或密码不正确！');history.go(-1);</script>";      
    	}
    }
    else
    	echo "<script>alert('提交未成功！'); history.go(-1);</script>";
?>