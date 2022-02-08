<?php


include("common.php");
$login_email= mysqli_real_escape_string($con, $_POST['email']);
$login_password= $_POST['password'];
$select_query="Select  *from user where email='$login_email' AND password ='$login_password' ";
$select_query_result= mysqli_query($con, $select_query) or die(mysqli_error($con));
if(mysqli_num_rows($select_query_result)==0){
    echo "Invalid username or password";
   
}
else{
 
  $row= mysqli_fetch_array($select_query_result);
 
$_SESSION['email']=$login_email;
 $_SESSION['id'] = $row["id"];
 $_SESSION['name']=$row["name"];
 header('location:product.php');

}

?>
