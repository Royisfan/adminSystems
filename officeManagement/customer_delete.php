<?php
    require_once('now_admin.php');

    $id=$_GET['id'];
    
    $sql="delete from infocustomer where id='$id'";
    $result=mysqli_query($con,$sql);

    if($result){
    	echo "<script>alert('删除成功！');window.location.href='customer.php';</script>";
    }else{
    	echo "<script>alert('删除失败！'); window.location.href='customer.php';</script>";
    }
?>