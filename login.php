<?php
session_start();

if(isset($_SESSION['username'])){
    header('location:login.php');
  }

?>

<?php
include 'dbcon.php';

if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($con,$_POST['emailid']);
    $password=mysqli_real_escape_string($con,$_POST['pass']);
    
    $emailsearch="select * from signup where email='$email'";
    $query=mysqli_query($con,$emailsearch);
    $emailcount=mysqli_num_rows($query);
    if($emailcount){
        $emailPass=mysqli_fetch_assoc($query);

        $dbpass=$emailPass['password'];
        $pass_dec=password_verify($password,$dbpass);

        $_SESSION['username']=$emailPass['username'];
        if($pass_dec){
            ?>
            <script>
                alert("Log in successfully!");
            </script>
            
            <?php
            header('Location: user/index.php');
            ?>
            <!-- <script>
                location.replace('user/index.php');
            </script> -->
            <?php
        }else{
            ?>
            <script>
                alert("Incorrect password!");
            </script>
            <?php
            
        }
    }else{
        ?>
        <script>
            alert("Invalid email!");
        </script>
        <?php
    
    }

    
    }
    
    




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">


    <style>
        .eye{
            position: relative;
        }
        #hide1{
            display:none;

        }
        #hide1,#hide2{
            position: absolute;
            top:-25px;
            left:50px;
            transform:translate(300px,0px);
        }
    </style>

</head>
<body  style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('images/bgimg.jpg');">
<div class="container  h-100 ">
    <div class="row mt-5 p-5">
        
        <div class="col-md-6 offset-md-3 col-12">
        <div class="card  rounded p-2">
            <div class="card-header">
            <h2 class="text-center mb-3">Log in here</h2>
            </div><!--/card-header-->
        
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="emailid" id="email" aria-describedby="emailHelp" placeholder="Enter email">
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
    <span class="eye" onclick="myfun()">
    <i class="fa fa-eye" id="hide1"></i>
    <i class="fa fa-eye-slash" id="hide2"></i>
    </span>
  </div>
  
  <button type="submit" class="btn btn-primary" name="login">Log in</button>
  <p class="mt-4">Not have an account?<a href="signup.php" class="text-decoration-none">Sign up here</a></p>
</form>
<!-- <a href="admin/login.php">Log in as Admin</a> -->
    </div><!--/card-->

        </div><!--/col-->
       </div><!--/row-->
    
</div>    <!---/container-->




<script>

    function myfun(){
       var x=document.getElementById('password');
       var h1=document.getElementById('hide1');
       var h2=document.getElementById('hide2');

       if(x.type === 'password'){
           x.type="text";
           h1.style.display="block";
           h2.style.display="none";
       }else{
           x.type="password";
           h1.style.display="none";
           h2.style.display="block";
           
       }
   }
 

</script>

</body>
</html>


