<?php

include 'dbcon.php';
session_start();
$getid=$_GET['id'];
$getname=$_SESSION['username'];

// echo $getid;
// echo $getname;

$dupselq="select * from `addbook` where username='$getname'";
$dup= mysqli_query($con,$dupselq);
$condi = null;
if (mysqli_num_rows($dup) >0 ) {
   while($res = mysqli_fetch_assoc($dup)){
       if ($res["bookid"] == $getid) {
          $condi = true;
       }
   }
}
if($condi){
?>
   <script>
   alert('already exist!')
   location.replace('booklist.php');
   </script>
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
     