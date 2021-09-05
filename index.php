
<?php

include 'insert.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link rel="stylesheet" href="css/style.css">

    
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

</head>
<body style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('images/bgimg-3.jpg');background-position:center;">
<div class="wrapper container">
  <?php
  
  include 'header.php';

  ?>
<?php
include 'nav.php';
?>
<div class="jumbotron">

<h2 class="text-center">Enter Book Info</h2>
<div class="row m-auto">
<div class="col-12 col-md-6 col-lg-6  bookform">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" placeholder="Enter Book Title" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="athor">Author </label>
    <input type="text" class="form-control" placeholder="Enter Author Name" id="author" name="author" required>
  </div>
  
  <div class="form-group">
    <label for="publication">Publication:</label>
    <input type="text" class="form-control" placeholder="Enter Publisher name" id="pub" name="pub" required>
  </div>
  <div class="form-group">
    <label for="edition">Edition:</label>
    <input type="text" class="form-control" placeholder="Enter Edition" id="edition" name="edition" required>
  </div>
  <div class="form-group">
    
    <label for="files">You can upload your book's pdf file here: </label>
    <input type="file" class="form-control" id="pdf" name="pdf" required>

    
      </div>
  
  <button type="submit" class="btn btn-primary" name="save">Add Book</button>
</form>
</div><!--/bookform-->
<div class="col-12 col-md-6 col-lg-6 image mt-3">
<img src="images/img.png" alt="cartoon_man" class="cartoon" >
</div><!--/image-->
</div><!---/row-->

</div><!--/jumbotron-->

<?php
include 'footer.php';
?>
</div><!--/wrapper-->


<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>

  var dark=document.getElementById('dark');
  dark.onclick=function(){
    document.body.classList.toggle("darktheme");
  }
  
</script>
 <script>
 $(document).ready(function(){
  $("#selector").change(function(){
      $("body").toggleClass("bg-dark");
      $("nav").toggleClass("navbar-dark bg-dark");
      $(".jumbotron").toggleClass("bg-secondary text-white");
      $(".footer").toggleClass("bg-dark text-white");
});
 });
 </script>

</body>
</html>