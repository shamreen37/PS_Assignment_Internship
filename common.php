<?php
//For Development
//$con= mysqli_connect("localhost","root","","internship");

$con= mysqli_connect("sql6.freesqldatabase.com","sql6471568","IlJFbZNpmV","sql6471568")

or die(mysqli_error($con));
if(!isset($_SESSION)){
    session_start();
    }


?>
