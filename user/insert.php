<?php
include "dbcon.php";
// session_start();
//   echo $username;
 
if(isset($_POST['save'])){
   
   $username=$_POST['username'];
   $title=$_POST['title'];
   $author=$_POST['author'];
   $pub=$_POST['pub'];
   $edition=$_POST['edition'];
   $files=$_FILES['pdf'];
   
   $pdf_name=$files['name'];
   $pdf_error=$files['error'];
   $pdf_tmp=$files['tmp_name'];

   $pdftxt=explode('.',$pdf_name);
   $pdfcheck=strtolower(end($pdftxt));
   $fileExt=array('png','txt','jpg','jpeg');

   if(in_array($pdfcheck,$fileExt)){
       ?>
       <script>
          alert('Only pdf can be uploaded!');
       </script>
       <?php
   }else{
      $pdfStore='../pdf/'.$pdf_name;
      move_uploaded_file($pdf_tmp,$pdfStore);
      // $username=$_GET['username'];
$dupselq="select * from `booklists` where  title='$title'";
      $dup=mysqli_query($con,$dupselq);
$rows=mysqli_num_rows($dup);
      if($rows){
   ?>
   <script>
   alert('Book title will not be same!');
location.replace('index.php');
</script>
   <?php
}else{

   $insertq = "INSERT INTO `booklists`(`username`,`title`, `author`, `publication`, `edition`, `files`) VALUES ('$username','$title','$author','$pub','$edition','$pdfStore')";
   $q=mysqli_query($con,$insertq);

   if($q){
?>
<script>
alert('Your Book has been added to our list!');
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


   }

?>
<?php
}
?>


