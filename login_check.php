<?php
include 'include/header.php';
if(isset($_POST['login'])){
    $username=mysqli_real_escape_string($con,$_POST['username']);
    $password=mysqli_real_escape_string($con,$_POST['password']);
    
    $username=htmlentities($_POST['username']);
    $password=htmlentities($_POST['password']);

    $selq="select password from users where username='$username'";
    $res=mysqli_query($con,$selq);
    $row=mysqli_fetch_assoc($res);
    $pass=$row['password'];
    if(password_verify($password,$pass)){
        $_SESSION['username']=$username;
        header('Location: dashboard.php');
  
    }else{
        header('Location: login.php');
         $_SESSION['message']="<div class='chip close red black-text'>Sorry,Credentials don't match</div>";
             
    }

}

?>