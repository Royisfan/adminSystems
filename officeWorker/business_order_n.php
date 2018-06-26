<?php
    require_once('now_admin.php');
    $id=$_GET['ID'];

    $sql="SELECT `credit` FROM `infocustomer` WHERE id='$id'";
    $result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $row[0]=$row[0]-5;

    $sql_1="UPDATE `infocustomer` SET `credit`=$row[0] WHERE id='$id'";
    $result_1=mysqli_query($con,$sql_1);
   
    if($result&&$result_1){
    	$sql_3="DELETE FROM `order` WHERE ID='$id'";
        $result_3=mysqli_query($con,$sql_3);
        if($result_3)
    	    echo "<script>alert('信用扣除成功');window.location.href='business_order.php';</script>";
    	else
    		echo "<script>alert('信用扣除失败');window.location.href='business_order.php';</script>";
    }
    else
    	echo "<script>alert('信用扣除失败');window.location.href='business_order.php';</script>";
?>