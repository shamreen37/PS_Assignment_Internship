<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
</head>

<body>
<?php 
include("common.php");
if(isset($_REQUEST['id'])){
    $blog_id=$_REQUEST['id'];
    $select_query="SELECT *FROM blogs where blog_id=$blog_id";
    $select_query_result=mysqli_query($con, $select_query) or die(mysqli_error($con));

    } ?>


    <div class="container-fluid view-container py-4">
       <div class="inner-view-container">
       <?php  foreach($select_query_result as $q) { ?>
        <h2> <?php echo $q['title']; ?> </h2>
        <p>by  <?php echo $q['author']; ?> </p>
        <hr>
        <img src="Image/img2.jpg" alt="" class="img-fluid m-auto">
        <p class="my-3">

        <?php echo $q['content']; ?>
        </p>

        
        <hr>


        <i class="far fa-thumbs-up" id="like-btn"></i><span id="like-txt"> <?php echo $q['likes']; ?>   Likes</span>
        <?php }?>
        <a href="blog.php" class="right">Read More Blogs</a>
        <hr>
        <p class="text-center">Copyright &copy; All Rights Reserved.</p>
           
       </div>
    </div>


    <script>
        $('#like-btn').click(function() {
            $('#like-btn').removeClass('far fa-thumbs-up');
            $('#like-btn').addClass('fas fa-thumbs-up');
            window.location="includes/blog-like.php?id=<?php echo $_REQUEST['id']; ?>";
        });
    </script>


    <!--JS-->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</body>

</html>