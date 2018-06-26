<?php
    require_once('now_admin.php');

    $name=$_POST['name'];
    $password=$_POST['password'];
    $select=$_POST['select'];
    

    if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
    	$sql="insert into info_office(name,password,status) values('$name','$password','$select')";
    	$result=mysqli_query($con,$sql);

        if($result){
    	    echo "<script>alert('添加成功！');window.location.href='office_manage.php';</script>";
        }else{
    	    echo "<script>alert('添加失败！'); window.location.href='office_manage.php';</script>";
        }
    }

    else
    	echo "<script>alert('添加成功！');window.location.href='office_manage.php';</script>";
?>