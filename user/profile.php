

<?php
include 'dbcon.php';
  
?>

<!-- Design part -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>
<body  style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('../images/bgimg.jpg');">
    <div class="container mt-5 my-5">
        <?php include 'nav.php';?>
        <div class="row mt-5 pt-4">
            <div class="col-md-6 offset-md-3 col">
                <div class="card p-3">
                <div class="card-header">
            <h2 class="text-center">Your Profile</h2>
            </div><!--/card-header-->
    <div class="card-body text-center">
        <h3 class="border text-success">Your Basic info</h3>
        <?php
        $q=mysqli_query($con,"select * from signup where username='$_SESSION[username]';"); 
        ?>
        <div class="username">
            <label>Your Name: </label>
        <h4>
        <?php
        $row=mysqli_fetch_assoc($q);
        echo $_SESSION['username'];

        ?>
        </h4>
        </div><!--/username-->
        <div class="email">
        <label>Your Email: </label>
    <h4>
    <?php
          echo $row['email'];
          ?>
          </h4>  
        </div><!---/email-->
                 
          
        <div class="address">
        <label>Your Present Address: </label>
    <h4>
    <?php
          echo $row['address'];
          ?>
          </h4>  
        </div><!---/email-->
                 
        <div class="division">
        <label>Your Division: </label>
    <h4>
    <?php
          echo $row['division'];
          ?>
          </h4>  
        </div><!---/email-->
        <div class="gender">
        <label>Your Gender: </label>
    <h4>
    <?php
          echo $row['gender'];
          ?>
          </h4>  
        </div><!---/email-->
                 
          
        

    </div><!--/card-body-->
    <a class="btn btn-primary" href="updateprofile.php?id=<?php echo $row['id']; ?>">Edit profile</a>    
                </div><!--/card-->
            
            </div><!---/col-->
        </div><!--/row-->
   
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
      $(".jumbotron").toggleClass("bg-secondary text-white");
      $(".footer").toggleClass("bg-dark text-white");
});
 });
 </script>

</body>
</html>