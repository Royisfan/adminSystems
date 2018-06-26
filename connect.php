<?php
    require_once('config.php');

    if(!$con=mysqli_connect(HOST,USERNAME,PASSWORD)){
    	echo mysqli_error($con);
    }

    if(!mysqli_select_db($con,'adminSystem')){
    	echo mysqli_error($con);
    }

    if(mysqli_query($con,'set names utf8')){
    	echo mysqli_error($con);
    }
?>