<?php
include 'dbcon.php';
$id=$_GET['id'];

$delquery="delete from `rembook` where id=$id";

$del=mysqli_query($con,$delquery);

if($del){
    ?>
    <script>
    alert('Are you sure to delete?');
    location.replace('rembook.php');
    </script>
    <?php
    
       }else{
    ?>
    <script>
    alert('Sorry!something went wrong!')
    </script>
    <?php
       }
    ?>
    
    

