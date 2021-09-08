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
  
  <table class="table table-striped table-hover text-center">
    <thead>
      <tr>
      <th>User ID</th>
      <th>Name</th>
        <th>Email</th>
        <th>Address</th>
        <th>Division</th>
        <th>Gender</th>
      
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
include "dbcon.php";

$username= $_SESSION['username'];

$query="select id,username,email,address,division,gender from signup";
$q_run=mysqli_query($con,$query);

if(mysqli_num_rows($q_run)>0){
 
  while($res=mysqli_fetch_array($q_run)){

    ?>
    
          <tr>
            <td><?php echo $res['id'];?></td>
            <td><?php echo $res['username'];?></td>
            <td><?php echo $res['email'];?></td>
            <td><?php echo $res['address'];?></td>
            <td><?php echo $res['division'];?></td>
            <td><?php echo $res['gender'];?></td>
<td> <a href="userdelete.php?id=<?php echo $res['id'];?>" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
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

