<?php
    require_once('connect.php');

    $id=$_GET['id'];
    $week=$_POST['week'];
    $type=$_POST['type'];
    $time3;

    session_start();

    if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $sql="SELECT * FROM `order` WHERE time1='$week' and time2='$type'";
        $result=mysqli_query($con,$sql);
        $num=mysqli_num_rows($result);
        if($type=='上午'){
            if($num>=0&&$num<=3)
                $time3=8;
            else if($num>=4&&$num<=6)
                $time3=9;
            else if($num>=7&&$num<=9)
                $time3=10;
            else if($num>=10&&$num<=12)
                $time3=11;
        }
        else{
            if($num>=0&&$num<=3)
                $time3=15;
            else if($num>=4&&$num<=6)
                $time3=16;
            else if($num>=7&&$num<=9)
                $time3=17;
        }
        $sql_1="INSERT INTO `order`(`ID`, `time1`, `time2`, `time3`) VALUES ('$id','$week','$type','$time3')";
        $result_1=mysqli_query($con,$sql_1);
        if($result_1){
            echo "<script>alert('预约成功！');window.location.href='order_1.php';</script>";
        }else{}
    }
    else
        echo "<script>alert('预约失败！');window.location.href='order_1.php';</script>";
?>