<?php
    require_once('now_admin.php');

    $ID=$_GET['ID'];
    
    $sql="delete from info_office where ID='$ID'";
    $result=mysqli_query($con,$sql);

    if($result){
    	echo "<script>alert('删除成功！');window.location.href='office_manage.php';</script>";
    }else{
    	echo "<script>alert('删除失败！'); window.location.href='office_manage.phps';</script>";
    }
?>