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
<body style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('../images/bgimg.jpg');">
<div class="wrapper container">
<?php
include 'nav.php';
?>

<div class="jumbotron">

<h2>Update Your Profile</h2>
<div class="row">
<div class="col-12 col-lg-6 bookform">
<?php
include "dbcon.php";
$upid=$_GET['id'];
  $showQuery = "Select * from `signup` where id={$upid}";
   $showdata=mysqli_query($con,$showQuery);
 $arrdata=mysqli_fetch_array($showdata);
if(isset($_POST['save'])){

    $username=mysqli_real_escape_string($con,$_POST['username']);
    $email=mysqli_real_escape_string($con,$_POST['email']);
    
    $address=mysqli_real_escape_string($con,$_POST['address']);
    $division=mysqli_real_escape_string($con,$_POST['division']);
    $gender=mysqli_real_escape_string($con,$_POST['gender']);

   $updateQuery = "update signup set id='$upid',username='$username',email='$email',address='$address',division='$division',gender='$gender' where id=$upid ";
   $query=mysqli_query($con,$updateQuery);

   if($query){
?>
<script>
alert('Your profile has been Updated Successfully!');
location.replace('profile.php');
</script>
<?php
// header('location:booklist.php');
   }else{
?>
<script>
alert('Sorry!something went wrong!')
</script>
<?php
   }
?>
<?php
}

?>



<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Your name</label>
    <input type="text" class="form-control" value="<?php echo $arrdata['username']; ?>" placeholder="name" id="username" name="username">
  </div>
  <div class="form-group">
    <label for="athor">Email </label>
    <input type="email" class="form-control" value="<?php echo $arrdata['email']; ?>"  placeholder="email" id="email" name="email">
  </div>
    
  <div class="form-group">
    <label for="publication">Present Address:</label>
    <input type="text" class="form-control" value="<?php echo $arrdata['address']; ?>"  placeholder="present Address" id="address" name="address" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputCity">Division</label>
    <select name="division" id="division" class="form-control" required>
    <option value="<?php echo $arrdata['division']; ?>">---Select your division---</option>
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
<input type="radio" name="gender" value="<?php echo $arrdata['gender']; ?>" required>Male
<input type="radio" name="gender" value="<?php echo $arrdata['gender']; ?>" required>Female
<input type="radio" name="gender" value="<?php echo $arrdata['gender']; ?>" required>Other   
  </div>
  <button type="submit" class="btn btn-primary" name="save">Save Changes</button>
</form>
</div><!--/bookform-->

</div><!---/row-->

</div><!--/jumbotron-->


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
      $(".jumbotron").toggleClass("bg-secondary text-white");
      $(".footer").toggleClass("bg-dark text-white");
});
 });
 </script>

</body>
</html>