<?php
include 'dbcon.php';

if(isset($_POST['signup'])){
    $username=mysqli_real_escape_string($con,$_POST['name']);
    $email=mysqli_real_escape_string($con,$_POST['emailid']);
    $password=mysqli_real_escape_string($con,$_POST['pass']);
    $conpass=mysqli_real_escape_string($con,$_POST['conpass']);

    $username=htmlentities($_POST['username']);
    $email=htmlentities($_POST['emailid']);
    $password=htmlentities($_POST['password']);
    $conpass=htmlentities($_POST['conpass']);
    $password=password_hash($password,PASSWORD_BCRYPT);
    $conpass=password_hash($conpass,PASSWORD_BCRYPT);
    $emailquery="select * from signup where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_count($query);
    
    if($emailcount > 0){
        ?>
        <script>
            alert('Email already exist!Try another email');
        </script>
        <?php
    }else{
        if($password === $conpass){

            $insertQuery="insert into signup(username,email,password,conpass) values('$username','$email','$password','$conpass')";
            $insq=mysqli_query($con,$insertQuery);
            if($insq){
                ?>
                <script>
                    alert('Inserted data successfully!');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('No inserted!');
                </script>
                
                <?php

            }
            
        }else{
            ?>
            <script>
                alert('Password  is not matching!');
            </script>
            <?php
        }
    }
    }
    
    




?>

<!-- Design part -->
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="container">
    <form action="" method="POST">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="name" id="username"  placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="emailid" id="email"  placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="password" placeholder="Enter Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="conpass" id="conpass" placeholder="Confirm Password">
  </div>
  <button type="submit" name="signup" class="btn btn-primary">Submit</button>
</form>    

    </div><!--/container-->




<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>