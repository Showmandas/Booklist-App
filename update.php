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
<div class="wrapper container">
<?php
include 'nav.php';
?>

<div class="jumbotron">

<h2>Update Book Info</h2>
<div class="row">
<div class="col-12 col-lg-6 bookform">
<?php
include "dbcon.php";
$id=$_GET['id'];
  $selQuery = "Select * from `listbook`";
   $query=mysqli_query($con,$selQuery);
 $res=mysqli_fetch_array($query);
if(isset($_POST['save'])){

    $id=$_GET['id'];
   $title=$_POST['title'];
   $author=$_POST['author'];
   $isbn=$_POST['isbn'];

   $updateQuery = "update listbook set id=$id,title='$title',author='$author',isbn='$isbn' where id=$id ";
   $query=mysqli_query($con,$updateQuery);

   if($query){
?>
<script>
alert('Your data has been Updated Successfully!');
</script>
<?php
// header('location:booklist.php');
   }else{
?>
<script>
alert('Sorry!something went wrong!')
</script>
<?php
   }
?>
<?php
}
?>



<form method="post">
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" value="<?php echo $res['title']; ?>" placeholder="Enter Book Title" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="athor">Author </label>
    <input type="text" class="form-control" value="<?php echo $res['author']; ?>"  placeholder="Enter Author Name" id="author" name="author">
  </div>
  
  <div class="form-group">
    <label for="isbn">ISBN:</label>
    <input type="number" class="form-control" value="<?php echo $res['isbn']; ?>"  placeholder="Enter ISBN Number" id="isbn" name="isbn">
  </div>
  
  <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
</form>
</div><!--/bookform-->

</div><!---/row-->

</div><!--/jumbotron-->


</div><!--/wrapper-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>