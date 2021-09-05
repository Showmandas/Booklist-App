

<?php
include 'dbcon.php';

if(isset($_POST['signup'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['emailid']);
    $password=mysqli_real_escape_string($con,$_POST['pass']);
    $conpass=mysqli_real_escape_string($con,$_POST['conpass']);
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $division=mysqli_real_escape_string($con,$_POST['division']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);

    $username=htmlentities($_POST['username']);
    $email=htmlentities($_POST['emailid']);
    $password=htmlentities($_POST['pass']);
    $conpass=htmlentities($_POST['conpass']);
    $address=htmlentities($_POST['address']);
    $division=htmlentities($_POST['division']);
    $gender=htmlentities($_POST['gender']);
    
    $pass=password_hash($password,PASSWORD_BCRYPT);
    $cpass=password_hash($conpass,PASSWORD_BCRYPT);
    $emailquery="select * from signup where email='$email'";
    $query=mysqli_query($con,$emailquery);
    $emailcount=mysqli_num_rows($query);
    
    if($emailcount > 0){
        ?>
        <script>
            alert('Email already exist!Try another email');
        </script>
        <?php
    }else{
        if($password === $conpass){

            $insertQuery="insert into signup(username,email,password,cpassword,address,division,gender) values('$username','$email','$pass','$cpass','$address','$division','$gender')";
            $insq=mysqli_query($con,$insertQuery);
            if($insq){
                ?>
                <script>
                    alert('Registered successfully!');
                </script>
                <?php
                ?>
                <script>
                    location.replace('login.php');
                </script>
                <?php
            }else{
                ?>
                <script>
                    alert('Not inserted!');
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
<body  style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('images/bgimg.jpg');">
    <div class="container mt-5 my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3 col">
                <div class="card p-3">
                <div class="card-header">
            <h2 class="text-center">Sign up here</h2>
            </div><!--/card-header-->
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" class="mt-5">
    <div class="form-group">
    <label for="username">Username</label>
    <input type="text" class="form-control" name="username" id="username"  placeholder="Enter username" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="emailid" id="email"  placeholder="Enter email" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="pass" id="password" placeholder="Enter Password" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Confirm Password</label>
    <input type="password" class="form-control" name="conpass" id="conpass" placeholder="Confirm Password" required>
  </div>
 
  <div class="form-group">
    <label for="exampleInputAddress">Present address</label>
    <input type="text" class="form-control" name="address" id="address"  placeholder="Enter Present Address" required>
    
  </div>
  
  <div class="form-group">
    <label for="exampleInputCity">Division</label>
    <select name="division" id="division" class="form-control" required>
    <option value="">---Select your division---</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Chattogram">Chattogram</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Barisal">Barisal</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Khulna">Khulna</option>
        <option value="Mymensingh">Mymensingh</option>

    </select>
    
  </div>
  <div class="form-group p-1">
    <label for="exampleInputAddress">Gender: </label>
<input type="radio" name="gender" value="male">Male
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="other">Other   
  </div>
  <!-- <div class="form-group">
    <label for="exampleInputAddress">Date Of Registration</label>
    <input type="datetime-local" class="form-control" name="datetime" id="datetime"  placeholder="Enter Present Address">
    
  </div>
   -->
  <button type="submit" name="signup" class="btn btn-primary">Submit</button>
</form>    
<p class="mt-3">Have an account?<a href="login.php">Log in</a></p>
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

</body>
</html>