<?php
include("../common.php");

$title= $_POST['title'];
$content= mysqli_real_escape_string($con, $_POST['content']);
$login_email=$_SESSION['email'];
$query="Insert into blogs(title,content,author) values('$title','$content','$login_email')";
$query_result= mysqli_query($con, $query) or die(mysqli_error($con));


header('location:../blog.php');
?>