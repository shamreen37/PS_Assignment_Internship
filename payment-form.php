<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  
</head>

<body>

   <div class="container-fluid payment-container py-2">
   
   <div class="form  col-12 col-md-6">
    <form method="POST" action="pay.php">
        <h1 class="mb-4">Payment  Gateway</h1>
        <h3> Total amount: <?php echo $_REQUEST['amt']; ?>/- </h3>
        <h2 class="text-danger">Please note that this payment gateway is in test mode. So no amount will be deducted.</h2>
        <div class="form-floating mb-3">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
            
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control " id="floatingName"  name="c_name" placeholder="Customer Name"    required>
        <label for="floatingName">Customer Name</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" class="form-control " id="floatingContact"  name="contact" placeholder="Contact Number" title="Please enter a 10 digit mobile number." required>
        <label for="floatingContact">Contact Number</label>
    </div>

        <div class="form-floating mb-3">
        <input type="text" class="form-control " id="floatingAmount"  name="price" placeholder="Amount"  required>
        <label for="floatingAmount">Amount</label>
    </div>



        <div class="col-12">
            <button class="btn btn-primary" type="submit">Pay Now</button> 
    
        </div>


</form>

    </div>
   </div>
   


     <!--JS-->
     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>