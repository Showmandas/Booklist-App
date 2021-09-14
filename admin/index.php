
<?php
 
include 'insert.php';



?>


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
    url('../images/bgimg.jpg');background-position:center;">
<div class="wrapper container">
  <?php
  
  include 'header.php';

  ?>
<?php
include 'nav.php';
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
      <th>Username</th>
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
if(isset($_GET['sort_alphabet'])){
  if($_GET['sort_alphabet']=="title"){
$sort_option="ASC";
  }else{
    if($_GET['sort_alphabet']=="author"){
    $sort_option="ASC";
  }elseif($_GET['sort_alphabet']=="publication"){
    $sort_option="ASC";
  }elseif($_GET['sort_alphabet']=="edition"){
    $sort_option="ASC";
  }
}

}
$username= $_SESSION['username'];
$sortquery="select * from booklists order by title $sort_option";
$q_run=mysqli_query($con,$sortquery);

if(mysqli_num_rows($q_run)>0){
 
  while($resShow=mysqli_fetch_array($q_run)){

    ?>
    
          <tr>
            <td><?php echo $resShow['id'];?></td>
            <td><?php echo $resShow['username'];?></td>
            <td><?php echo $resShow['title'];?></td>
            <td><?php echo $resShow['author'];?></td>
            <td><?php echo $resShow['publication'];?></td>
            <td><?php echo $resShow['edition'];?></td>
            <td><a href="download.php?file=pdf/.<?php echo $resShow['files']; ?>" name="download">Click Here To Download</a>
            
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