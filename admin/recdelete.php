<?php
include 'dbcon.php';
$delid=$_GET['id'];

$delquery="delete from `rembook` where id={$delid}";

$del=mysqli_query($con,$delquery);

if($del){
    ?>
    <script>
    alert('Are you sure to delete?');
    location.replace('yourbooks.php');
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
    
    

