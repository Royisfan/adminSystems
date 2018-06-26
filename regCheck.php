<?php 
    require_once('connect.php');

    if(isset($_POST['submit'])&&$_POST['submit']=='注册'){
        $username=$_POST['username'];
        $account=$_POST['account'];
        $password=$_POST['password'];
        $telphone=$_POST['telphone'];
        $confirm=$_POST['confirm'];

        if($username==""||$password==""||$account==""||$telphone==""||$confirm==""){
            echo "<script>alert('请输入完善的信息!');history.back(-1);</script>";
        }
        else{
            if($password==$confirm){
                $sql="select id from infocustomer where id='$account'";
                $result=mysqli_query($con,$sql);
                $row=mysqli_num_rows($result);
                if($row){
                     echo "<script>alert('该账号已经存在!'); history.go(-1);</script>";
                }
                else{
                    $sql_insert="insert into infocustomer(id,name,telNum,password) values('$account','$username','$telphone','$password')";
                    $sql_res=mysqli_query($con,$sql_insert);
                    if($sql_res){
                        echo "<script>alert('注册成功！'); window.location.href='login.php';</script>";  
                    }  
                    else{  
                       echo "<script>alert('系统繁忙，请稍候'); history.go(-1);</script>";  
                    }  
                }
            }
            else{
                echo "<script>alert('密码不一致!'); history.back(-1);</script>"; 
            }
        }
    }
    else{
        echo "<script>alert('提交未成功!'); history.back(-1);</script>";
    }
?> 