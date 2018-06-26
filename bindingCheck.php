<?php
    require_once('now_user.php');
    $account=$_POST['account'];
    $password=$_POST['password'];
    if(isset($_POST['submit'])&&$_POST['submit']=='添加'){
    	$sql="select id,password from infocustomer where id=$account and password=$password";
    	$result=mysqli_query($con,$sql);
    	$num=mysqli_num_rows($result);
    	if($num){
    		$sql_1="INSERT INTO `binding`(`ID`, `ID_1`) VALUES ('$now_account','$account')";
    		$result_1=mysqli_query($con,$sql_1);
    		if($result)
    		    echo "<script>alert('绑定成功');window.location.href='binding.php';</script>";
    		else
    			echo "<script>alert('绑定失败');window.location.href='binding.php';</script>";
    	}
    	else{
    		echo "<script>alert('用户名或密码不正确！');window.location.href='binding.php';</script>";      
    	}
    }
    else
    	echo "<script>alert('绑定失败');window.location.href='binding.php';</script>";
?>