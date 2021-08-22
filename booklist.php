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
<div class="container table-responsive-sm">
  <h2>Book list</h2>
            
  <table class="table table-striped table-hover text-center">
    <thead>
      <tr>
      <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>ISBN</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
include "dbcon.php";

   $selQuery = "Select * from `booklist`";
   $query=mysqli_query($con,$selQuery);
    
   while($res=mysqli_fetch_array($query)){

?>

      <tr>
        <td><?php echo $res['id'];?></td>
        <td><?php echo $res['title'];?></td>
        <td><?php echo $res['author'];?></td>
        <td><?php echo $res['isbn'];?></td>
        <td> <a href="update.php?id=<?php echo $res['id'];?>" class="btn btn-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
</a> </td>
        <td> <a href="delete.php?id=<?php echo $res['id'];?>" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
</a> </td>
       </tr>
  <?php
   }
  ?> 
  </table>
</div>


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
 $(document).ready(function(){
  $("#selector").change(function(){
      $("body").toggleClass("bg-dark");
      $("nav").toggleClass("navbar-dark bg-dark");
      $("table").toggleClass("text-white");
      $(".jumbotron").toggleClass("bg-secondary text-white");
      $(".footer").toggleClass("bg-dark text-white");
});
 });
</script>
</body>
</html>