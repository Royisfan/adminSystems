<?php
    require_once('now_admin.php');
    $id=$_GET['ID'];
    $sql="update identitycard set status=2 where ID=$id";
    $result=mysqli_query($con,$sql);
    echo "<script>window.location.href='business_person.php';</script>";
?>