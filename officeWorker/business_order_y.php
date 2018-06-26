<?php
    require_once('now_admin.php');
    $id=$_GET['ID'];
    $sql="DELETE FROM `order` WHERE ID='$id'";
    $result=mysqli_query($con,$sql);
    if($result){
    	echo "<script>alert('办理成功');window.location.href='business_order.php';</script>";
    }
    else
    	echo "<script>alert('失败');window.location.href='business_order.php';</script>";
?>