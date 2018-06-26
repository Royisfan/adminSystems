<?php 
    require_once('now_user.php');

    if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $text=$_POST['text'];
        $time=date('Y-m-d H:i:s',time());

        if($text==""){
            echo "<script>alert('请输入留言!');history.back(-1);</script>";
        }
        else{
            $sql_insert="insert into message(username,context,time) values('$now_username','$text','$time')";
            echo $sql_insert;
            $sql_res=mysqli_query($con,$sql_insert);
            if($sql_res)
                echo "<script>window.location.href='messageBoard.php';</script>";
            else
                echo "<script>alert('提交未成功');window.location.href='messageBoard.php';</script>";
        }
    }
    else{
        echo "<script>alert('提交未成功!'); history.back(-1);</script>";
    }
?> 