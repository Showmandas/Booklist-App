<?php
include 'dbcon.php';
include 'insert.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

</head>
<body>
<div class="wrapper container">
<?php
include 'nav.php';
?>

<div class="jumbotron">

<h2 class="text-left">Enter Book Info</h2>
<div class="row m-auto">
<div class="col col-md-6 col-lg-6  bookform">
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="post">
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" placeholder="Enter Book Title" id="title" name="title" required>
  </div>
  <div class="form-group">
    <label for="athor">Author </label>
    <input type="text" class="form-control" placeholder="Enter Author Name" id="author" name="author" required>
  </div>
  
  <div class="form-group">
    <label for="isbn">ISBN:</label>
    <input type="number" class="form-control" placeholder="Enter ISBN Number" id="isbn" name="isbn" required>
  </div>
  
  <button type="submit" class="btn btn-primary" name="save">Save</button>
</form>
</div><!--/bookform-->
<div class="col col-md-6 col-lg-6 image">
<img src="images/img.png" alt="cartoon_man" class="img-fluid">
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