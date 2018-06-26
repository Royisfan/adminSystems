<?php
    require_once('now_admin.php');

    $title=$_GET['title'];
    $sql="delete from notice where title='$title'";
    $result=mysqli_query($con,$sql);
    if($result){
    	echo "<script>alert('删除成功！'); window.location.href='notice_manage.php';</script>";
    }else{
    	echo "<script>alert('删除失败！'); window.location.href='notice_manage.php';</script>";
    }
?>