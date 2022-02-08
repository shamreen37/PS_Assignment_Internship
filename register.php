<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    
   include("common.php");
    ?>

<div class="container-fluid register-container">
<div class="panel col-12 col-md-6 my-3">


<h1 class="mb-3 mt-3">Registration form </h1>

<form method="POST" action="register_submit.php">
    <div class="form-group mb-3">
        <input type="text" class="form-control " name="name" placeholder="Name">
    </div>

    <div class="form-group mb-3">
        <input type="text" class="form-control " name="email" placeholder="Email" >
    </div>

    <div class="form-group mb-3">
        <input type="text" class="form-control " name="contact" placeholder="Contact Number">
    </div>

    <div class="form-group mb-3">
        <input type="text" class="form-control" name="address" placeholder="Address">
    </div>

    <div class="form-group mb-3">
<input type="password" class="form-control" name="password" id="inputPassword4" placeholder="Password">
</div>

    <div class="ms-2 mb-3">
        <p>Gender :</p>
        <label style="margin-right:20px;" id="radio"><input type="radio"  name="gender" value="Male" checked style="height:17px; width:17px;" >  Male</label>
        <label id="radio"> <input type="radio"  name="gender" value="Female" style="height:17px; width:17px;">  Female</label>
    </div>


    <div class="form-group mb-3">
        <input type="text" class="form-control " name="linkedin" placeholder="Linkedin profile">
    </div>

    <div class="col-12 mt-3">
        <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
    </div>

</form>



</div>
</div>

       

</body>

</html>