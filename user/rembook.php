
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
<link rel="stylesheet" href="css/style.css">
</head>
<body style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('../images/bgimg.jpg');">
<div class="wrapper container">
  <?php
  include 'header.php'
  ?>
<?php
include 'nav.php';
?>
<div class="jumbotron">
<div class="container table-responsive-sm">
  <h2>Books Added By Admin</h2>
<a href="latest.php" class="btn btn-primary">Show latest</a>  
  <table class="table table-striped table-hover text-center">
    <thead>
      <tr>
      <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Edition</th>
        <th>Books</th>
        
      </tr>
    </thead>
    <tbody>
    <?php
include "dbcon.php";


$sortquery="select * from rembook";
$q_run=mysqli_query($con,$sortquery);

if(mysqli_num_rows($q_run)>0){
 
  while($resShow=mysqli_fetch_array($q_run)){

    ?>
    
          <tr>
            <td><?php echo $resShow['id'];?></td>
            <td><?php echo $resShow['title'];?></td>
            <td><?php echo $resShow['author'];?></td>
            <td><?php echo $resShow['publication'];?></td>
            <td><?php echo $resShow['edition'];?></td>
            <td><a href="download.php?file=pdf/.<?php echo $resShow['files']; ?>" name="download">Click Here To Download</a></td>
            <td><a href="include.php?id=<?php echo $resShow['id']; ?>" name="include">Include</a></td>
           </tr>
      <?php
       }
      
}else{
  ?>
  <script>
alert("No record found");
  </script>
  
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

