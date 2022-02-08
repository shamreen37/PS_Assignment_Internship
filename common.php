<?php
//For Development
$con= mysqli_connect("localhost","root","","internship")

//$con= mysqli_connect("remotemysql.com","IUQ8DZ1ksO","3HFAXtlYBM","IUQ8DZ1ksO")

or die(mysqli_error($con));
if(!isset($_SESSION)){
    session_start();
    }


?>
