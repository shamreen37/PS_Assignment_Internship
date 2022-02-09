<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body>
<?php
        include("common.php");
       
        ?>
    <div class="container-fluid create-container">
      <div class="inner-create-container py-4">
      <div class="text-center">
            <h1>Create a new Blog</h1>
        </div>
        <form action="includes/blog-add.php" method="POST" class="mt-5">
        <input type="text" placeholder="Blog Title" name="title" class="form-control  my-3 text-center" required>
        <textarea name="content" class="form-control my-3" id="" cols="30" rows="10" placeholder="Blog content" required></textarea>

            
        <div class="col-12 mt-3 text-center">
                    <button class="btn btn-dark" type="submit" value="Submit">Add Post</button>
                </div>

            
            </a>      
           
      </div>
    </div>
    </form>



    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>