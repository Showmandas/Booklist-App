<?php
include 'dbcon.php';
$id=$_GET['id'];

$delquery="delete from `signup` where id=$id";

$del=mysqli_query($con,$delquery);

if($del){
    ?>
    <script>
    alert('Are you sure to delete?');
    </script>
    <?php
    header('location:usershow.php');
       }else{
    ?>
    <script>
    alert('Sorry!something went wrong!')
    </script>
    <?php
       }
    ?>
    
    

