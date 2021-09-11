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
// $username= $_SESSION['username'];
?>
<div class="jumbotron">
<div class="container table-responsive-sm">
  <h2>Book list</h2>
<form action="" method="get">
<div class="input-group">
  <select name="sort_alphabet" class="form-control">
  <option value="">Select value</option>
  <option value="title" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet']=='title'){echo 'selected';}?> >Title</option>
  <option value="author" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet']=='author'){echo 'selected';}?> >Author</option>
  <option value="publication" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet']=='publication'){echo 'selected';}?> >Publication</option>
  <option value="edition" <?php if(isset($_GET['sort_alphabet']) && $_GET['sort_alphabet']=='edition'){echo 'selected';}?> >Edition</option>
</select>            
<button type='submit' class="input-group-text btn btn-primary">Sort</button>
  </div><!--/input-group-->

</form>
  
  <table class="table table-striped table-hover text-center">
    <thead>
      <tr>
      <th>Book ID</th>
      <th>Name</th>
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
include "dbcon.php";

$sort_option="";
$username= $_SESSION['username'];
if(isset($_GET['sort_alphabet'])){
  if($_GET['sort_alphabet']=="title"){
    $sort_option="ASC";
      }else{
        $sort_option="DESC";
      }
}
$query="select * from booklists where username='$username' order by  title $sort_option";
$q_run=mysqli_query($con,$query);

if(mysqli_num_rows($q_run)>0){
 
  while($res=mysqli_fetch_array($q_run)){

    ?>
    
          <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['username'];?></td>
            <td><?php echo $res['title'];?></td>
            <td><?php echo $res['author'];?></td>
            <td><?php echo $res['publication'];?></td>
            <td><?php echo $res['edition'];?></td>

            <td><a href="download.php?file=pdf/.<?php echo $res['files']; ?>" name="download">Click Here</a>
            <td> <a href="updatebook.php?id=<?php echo $res['id'];?>" class="btn btn-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a> </td>
            <td> <a href="delbook.php?id=<?php echo $res['id'];?>" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
           </a> </td>
           </tr>
      <?php
       }
      
}else{
  ?>
    <script>
alert("User Record Not found!");
  </script>

  <?php
}

  ?>
  <?php

  $searchq="select * from addbook where username='$username'";
$req=mysqli_query($con,$searchq);
if(mysqli_num_rows($req)>0){
  while($r=mysqli_fetch_array($req)){
    $rid=$r['bookid'];
    $selq="select * from rembook where id='$rid'";
    $qsel=mysqli_query($con,$selq);
    $fq=mysqli_fetch_array($qsel);
    // echo $fq['author'];

    if(isset($fq)){

    

    
    ?>
   <tr>

            <td><?php echo $fq['id'];?></td>
            <td>Admin</td>
            <td><?php echo $fq['title'];?></td>
            <td><?php echo $fq['author'];?></td>
            <td><?php echo $fq['publication'];?></td>
            <td><?php echo $fq['edition'];?></td>

            <td><a href="download.php?file=pdf/.<?php echo $fq['files']; ?>" name="download">Click Here</a></td>
            <td> <a href="#" class="btn btn-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
           </a> </td>
            <td> <a href="#" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
           </a> </td>
           </tr>
 <?php
    }
  }
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

