<?php

  include("common.php");
     $name= $_POST['name'];
$email= $_POST['email'];
$contact= $_POST['contact'];
$password=$_POST['password'];
$address= $_POST['address']; 
$gender= $_POST['gender']; 
$linkedin= $_POST['linkedin'];

    $submit_query="INSERT INTO user(name,email,contact,password,address,gender,linkedin) "
            . "values('$name','$email','$contact','$password','$address','$gender','$linkedin')";
$user_registration_submit= mysqli_query($con,$submit_query) or die(mysqli_error($con));


$_SESSION['email']=$email;
$_SESSION['name']= $name;


header('location:index.php');

