<?php
include("../common.php");
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$query="Insert into users_items(user_id,item_id,status) values('$user_id','$item_id','Added to Cart')";

$query_result= mysqli_query($con, $query) or die(mysqli_error($con));


header('location:../product.php');
?>