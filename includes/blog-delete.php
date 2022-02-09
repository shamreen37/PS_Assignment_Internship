<?php

include("../common.php");
$blog_id=$_GET['id'];
//$user_id=$_SESSION['id'];
$delete_query="DELETE FROM blogs where blog_id='$blog_id'";
        $delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
        header('location:../blog.php');
?>