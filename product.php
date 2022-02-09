<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>



</head>

<body>
<?php
        include("common.php")
        ?>
        <?php
    
     include("check_if_added.php");
        ?>

            
            

<div class="container pt-5 jumbo-container">
    <div class="jumbotron jumb text-center">
        <h1 class="">Welcome to our Lifestyle Store!</h1>
     <p>We have the best cameras,watches and shirts for you.No need to hunt around,we have all in one place.</p>
    </div>
   <div class="btn-div"> <a href="cart.php"><div class="btn btn-dark me-2 mb-4">View Cart 
    </div></a>  <a href="blog.php"><div class="btn btn-dark m-auto mb-4">View Blogs
    </div></a> </div>
</div>


<div class="container">
   
<div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail text-center">
             <img src="Image/5.jpg" alt="" >
          <div class="caption">
               <h2>Cannon EOS</h2>
                 <p>Price: Rs.36000.00</p><?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(1)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=1" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              
             </div>
          </div>
        </div>
  
        
        
        
        <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/2.jpg" alt="" >
      <div class="caption">
        <h2>Sony DSLR</h2>
       <p>Price: Rs.40000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(2)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=2" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
             
      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/3.jpg" alt="" >
      <div class="caption">
     <h2>Sony DSLR</h2>
       <p>Price: Rs.50000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(3)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=3" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              
      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/4.jpg" alt="" >
      <div class="caption">
      <h2>Olympus DSLR</h2>
       <p>Price: Rs.80000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(4)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=4" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              
      </div>
     </div>
</div>
</div>



<div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail text-center">
             <img src="Image/9.jpg" alt="" >
           <div class="caption">
             <h2>Titan Model #301</h2>
              <p>Price: Rs.13000.00</p>
             <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(5)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=5" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>
              
             </div>
          </div>
        </div>
  <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/10.jpg" alt="" >
      <div class="caption">
        <h2>Titan Model #201</h2>
       <p>Price: Rs.3000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(6)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=6" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/11.jpg" alt="" >
      <div class="caption">
        <h2>HMT Milan</h2>
       <p>Price: Rs.8000.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(7)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=7" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/12.jpg" alt="" >
      <div class="caption">
        <h2>Faber Luba #111</h2>
       <p>Price: Rs.18000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(8)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=8" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
</div>


<div class="row">
        <div class="col-sm-6 col-md-3">
          <div class="thumbnail text-center hw">
              <img src="Image/8.jpg" alt="" id="hw1" >
          <div class="caption">
               <h2>H&W</h2>
              <p>Price: Rs.800.00</p>
              <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(9)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=9" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

             </div>
          </div>
        </div>
  <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/6.jpg" alt="" >
      <div class="caption">
        <h2>Luis Phil</h2>
       <p>Price: Rs.1000.00</p>
        <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(10)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=10" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
 <div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/13.jpg" alt="" >
      <div class="caption">
        <h2>John Zok</h2>
       <p>Price: Rs.1500.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(11)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=11" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
<div class="col-sm-6 col-md-3">
      <div class="thumbnail text-center">
      <img src="Image/14.jpg" alt="" >
      <div class="caption">
        <h2>Jhalsani</h2>
       <p>Price: Rs.1300.00</p>
       <?Php  if(!isset($_SESSION['email'])){    ?>
                 <p><a href="login.php" class="btn btn-primary btn-block mb-4" role="button">Buy Now</a></p>
                 <?php  
                 }else{
                     if(check_if_added_to_cart(12)){
                 echo '<a href="#" class="btn btn-block mb-4 btn-success" disabled>Added to Cart</a>';
                 } else {?>
                 <a href="includes/cart-add.php?id=12" name="add" value="add" class="btn btn-block mb-4 btn-primary">Add to Cart</a>
                 <?php
                 }
                 }
                 ?>

      </div>
     </div>
</div>
</div>
</div>



 

        
   


</body>

</html>