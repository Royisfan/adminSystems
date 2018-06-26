<?php
   require_once('now_admin.php');

    $question=$_POST['question'];
    $answer=$_POST['answer'];

    if(isset($_POST['submit'])&&$_POST['submit']=='提交'){
    	$sql="insert into question(title,context) values('$question','$answer')";
        $result=mysqli_query($con,$sql);
        if($result){
            echo "<script>alert('添加成功！');window.location.href='question.php';</script>";
        }else{
            echo "<script>alert('添加失败'); history.go(-1);</script>";
        }
    }
    else
    	echo "<script>alert('添加失败！'); history.go(-1);</script>";
?>