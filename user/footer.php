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
</head>
<body>

<div class="footer container" style=" background: rgba(120,20,20,0.7);">
 

<div class="row text-center">

<div class="col-lg-4 otherlinks  py-4 p-4">
<a href="#" class="text-warning">Privacy</a>
<a href="#" class="text-warning">Terms</a>
</div><!--/otherlinks-->
<div class="col-lg-4 copyright px-5 py-4">
<p class="text-center text-light">&copy;copyright <?php echo date('Y');?>, <a href="#">showmandas</a></p>
<a href="../admin/login.php">Log in as admin</a>
</div><!--/ copyright-->
<div class="socialmedia col-lg-4 py-4 pl-5">
<a href="#" class="p-2 text-light"> <i class="fa fa-facebook-square"></i> </a>
<a href="#" class="p-2 text-light"> <i class="fa fa-instagram"></i> </a>
<a href="#" class="p-2 text-light"> <i class="fa fa-pinterest"></i> </a>
</div><!--/socialmedia-->
</div><!--/row-->
</div><!--/container-->
<script>

function dark(){
  document.querySelector('.darktheme').style.backgroundColor="black";
}

</script>
</body>
</html>