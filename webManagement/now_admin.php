<?php
    require_once('../connect.php');

   session_start();

   if(isset($_SESSION['logined']) && $_SESSION['logined']){
      $now_account=$_SESSION['account'];
      $sql="select name from info_office where name='$now_account'";  
      $result=mysqli_query($con,$sql); 
      $res_all=mysqli_fetch_array($result);
   }
?>