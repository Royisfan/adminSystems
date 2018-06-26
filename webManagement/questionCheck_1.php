<?php
   require_once('now_admin.php');

    $title=$_POST['title'];
    $context=$_POST['context'];

    if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
        $sql_1="delete from question where title='$title'";
        $result_1=mysqli_query($con,$sql_1);
        $sql="insert into question(title,context) values('$title','$context')";
        $result=mysqli_query($con,$sql);
        if($result)
            echo "<script>alert('修改成功！');window.location.href='question_manage.php';</script>";
        else
            echo "<script>alert('修改未成功！'); history.go(-1);</script>";
    }
    else
        echo "<script>alert('修改未成功！'); history.go(-1);</script>";

   
?>