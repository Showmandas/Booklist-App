<?php
include "dbcon.php";
if(isset($_POST['save'])){

   $title=$_POST['title'];
   $author=$_POST['author'];
   $isbn=$_POST['isbn'];

   $insertQuery = "Insert INTO `booklist`(`title`,`author`,`isbn`) VALUES('$title','$author','$isbn')";
   $query=mysqli_query($con,$insertQuery);

   if($query){
?>
<script>
alert('Your data has been saved! Pls check it in booklist page');
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
<?php
}
?>


