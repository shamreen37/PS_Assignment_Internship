<?php

include("../common.php");
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$delete_query="DELETE FROM users_items where user_id='$user_id' and item_id='$item_id'";
        $delete_query_result= mysqli_query($con, $delete_query) or die(mysqli_error($con));
        header('location:../cart.php');
?>