<?php
    require_once('now_admin.php');

    $context=$_GET['context'];

    $sql="delete from message where context='$context'";
    $result=mysqli_query($con,$sql);
     
    if($result){
    	echo "<script>alert('删除成功！');window.location.href='message.php';</script>";
    }else{
    	echo "<script>alert('删除失败！'); window.location.href='notice_manage.php';</script>";
    }
?>