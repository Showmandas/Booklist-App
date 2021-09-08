<?php

include 'dbcon.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latest Record</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link rel="stylesheet" href="css/style.css">

</head>
<body>

<div class="container">
<?php
include 'nav.php';
?>
  
  <table class="table table-striped table-hover text-center">
    <thead>
      <tr>
      <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Edition</th>
        <th>Books</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php


$sortquery="select * from booklists order by id DESC LIMIT 3";
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
            <td><a href="download.php?file=pdf/.<?php echo $resShow['files']; ?>" name="download">Click Here To Download</a>
            <td> <a href="update.php?id=<?php echo $resShow['id'];?>" class="btn btn-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a> </td>
            <td> <a href="delete.php?id=<?php echo $resShow['id'];?>" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
           </a> </td>
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


</div><!--/container-->




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