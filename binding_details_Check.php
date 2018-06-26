<?php
    require_once('connect.php');

    $account=$_GET['account'];
    $sql_1="select password from infocustomer where id='$account'";
    $result_1=mysqli_query($con,$sql_1);
    $row=mysqli_fetch_array($result_1);
    $password=$row[0];

    $sql="select id,password from infocustomer where id=$account and password=$password";
    $result=mysqli_query($con,$sql);
    $num=mysqli_num_rows($result);
    if($num){ 
    	echo "<script>window.location.href='mainpage_1.php';</script>";
    }
?>