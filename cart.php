<html>
    <head>
        <meta charset="UTF-8">
        <title>Cart</title>
        <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    </head>


    <body>
        <?php
      include("common.php");
       $user_id=$_SESSION['id'];
       $select_query="SELECT *from users_items where user_id='$user_id'";
       $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
       $join_query="SELECT items.id, items.name,items.price FROM items INNER JOIN users_items ON items.id=users_items.item_id where users_items.user_id='$user_id'";
       $join_query_result=mysqli_query($con, $join_query) or die(mysqli_error($con));
       if(mysqli_num_fields($join_query_result)==0){
           echo 'ADD ITEMS TO CART FIRST';
   }
 $sum=0;
        ?>
        

       <div class="container-fluid cart-container">
       <div class="main">
       <div class="text-center m-0">
      <a href="product.php" class="text-white btn btn-dark mt-4 mb-3">Back to Products page</a>
      </div>
   <h1 class="mb-3">Cart Items</h1>

<div class="table-responsive">
<table class="table table-hover table-striped">
     <tbody>
         <tr>  <th>Item Number</th>
               <th>Item Name</th>
               <th>Price</th>
               <th>  Action  </th>
         </tr><?php while($row= mysqli_fetch_array($join_query_result)){    
             
           $sum= $sum +$row['price'];
             ?>
         <tr>     <td><b><?php echo $row['id'];   ?></b></td>
             <td><b><?php echo $row['name'];   ?></b></td>
             <td><b><?php echo $row['price']."/-";   ?></b></td>
                 <td><a href="includes/cart_remove.php?id=<?= $row['id']?>"  class="remove_item_link"> Remove Item </a></td>
         </tr><?php }?>
        <tr>     <td></td>
                 <td>Total</td>
                 <td>Rs. <?php echo $sum ?> /-</td>
                 <td><a href="payment-form.php?amt=<?php echo $sum; ?>" class="btn btn-primary">Confirm Order and Proceed to Pay!</a></td> 
         </tr>
      </tbody>
     </table>


 </div>
  
           
            
        </div>
       </div>
        
       
         <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
       
    </body>
</html>
