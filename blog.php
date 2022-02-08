<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

    </style>

</head>

<body>

    <?php
      include("common.php");
       $user_id=$_SESSION['id'];
       $select_query="SELECT *from blogs ";
       $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));
       if(mysqli_num_fields($select_query_result)==0){
           echo 'No blogs posted';
   }
   
        ?>


        <div class="container-fluid blog-container">
            <div class="inner-container">
            <div class="text-center">
                <a href="create.php" class="btn btn-dark mt-5 mb-3"> &#43; Create a new blog</a>
            </div>

            <div class="row">
<?php    
      foreach($select_query_result as $s){ ?>
<div class="col-md-4 d-flex justify-content-center align-items-center">
<div class="card bg-light mt-3 mb-1">
<h3 class="card-title"> <?php echo $s['title'] ?> </h3>
    <div class="card-body">
        <p class="card-text"> <?php echo $s['content'] ?> </p>  
    </div>  
    <p class="text-primary"> by <?php echo $s['author'] ?>  </p>
    <a href="view.php?id=<?php echo $s['blog_id']; ?> " class="btn btn-dark">Read More <span class="text-dark">&rarr;</span> </a>
</div>
</div>

    <?php } ?>


            </div>
            </div>

        </div>






        <!--JS-->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>