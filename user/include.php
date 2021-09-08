<?php

include 'dbcon.php';
session_start();
$getid=$_GET['id'];
$getname=$_SESSION['username'];

// echo $getid;
// echo $getname;

$dupselq="select * from `addbook` where bookid=$getid";
$dup=mysqli_query($con,$dupselq);
if($dup){
?>
<script>alert('already exist!')</script>
<?php
}else{



   $insertq = "INSERT INTO `addbook`(`username`,`bookid`) VALUES ('$getname','$getid')";
   $q=mysqli_query($con,$insertq);
   
   
   if($q){
     ?>
     <script>
     alert('Your Book has been added to your list!');
     location.replace('booklist.php');
     </script>
     <?php
        }else{
     ?>
     <script>
     alert('Sorry!something went wrong!')
     </script>
     <?php
        }
        
      }   
     ?>
     
