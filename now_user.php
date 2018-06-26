<?php
    require_once('connect.php');

   session_start();

   if(isset($_SESSION['logined']) && $_SESSION['logined']){
      $now_account=$_SESSION['account'];
      $sql="select name from infocustomer where id=$now_account";  
      $result=mysqli_query($con,$sql); 
      $res=mysqli_num_rows($result);
      if($res){
          $now=mysqli_fetch_array($result);
          $now_username=$now[0];
      }
   }
?>