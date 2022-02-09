<?php

include("../common.php");
$blog_id=($_GET['id']);
//$user_id=$_SESSION['id'];
$like_query="Update sql6471568.blogs SET likes=likes+1 where blog_id= $blog_id ";
        $like_query_result= mysqli_query($con, $like_query) or die(mysqli_error($con));
        header('location:'.$_SERVER['HTTP_REFERER']);

?>