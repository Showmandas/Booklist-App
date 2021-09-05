<?php
include "dbcon.php";
if(isset($_POST['save'])){

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
      $pdfStore='pdf/'.$pdf_name;
      move_uploaded_file($pdf_tmp,$pdfStore);
      
   $insertq = "INSERT INTO `booklists`(`title`, `author`, `publication`, `edition`, `files`) VALUES ('$title','$author','$pub','$edition','$pdfStore')";
   $q=mysqli_query($con,$insertq);

   if($q){
?>
<script>
alert('Your Book has been added to our list! Pls check it in booklist page');
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
<?php
}
?>


