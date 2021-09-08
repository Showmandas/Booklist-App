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
    url('images/bgimg.jpg');">
<div class="wrapper container">
<?php
include 'nav.php';
?>

<div class="jumbotron">

<h2>Update Book Info</h2>
<div class="row">
<div class="col-12 col-lg-6 bookform">
<?php
include "dbcon.php";
$ids=$_GET['id'];
  $showQuery = "Select * from `rembook` where id={$ids}";
   $showdata=mysqli_query($con,$showQuery);
 $arrdata=mysqli_fetch_array($showdata);
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
      $pdfStore='../pdf/'.$pdf_name;
      move_uploaded_file($pdf_tmp,$pdfStore);


   $updateQuery = "update rembook set id=$ids,title='$title',author='$author',publication='$pub',edition='$edition',files='$pdfStore' where id=$ids";
   $query=mysqli_query($con,$updateQuery);

   if($query){
?>
<script>
alert('Your data has been Updated Successfully!');
location.replace('yourbooks.php');
</script>
<?php
// header('');
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
}
?>



<form  method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label for="title">Book Title</label>
    <input type="text" class="form-control" value="<?php echo $arrdata['title']; ?>" placeholder="Enter Book Title" id="title" name="title">
  </div>
  <div class="form-group">
    <label for="athor">Author </label>
    <input type="text" class="form-control" value="<?php echo $arrdata['author']; ?>"  placeholder="Enter Author Name" id="author" name="author">
  </div>
    
  <div class="form-group">
    <label for="publication">Publication:</label>
    <input type="text" class="form-control" value="<?php echo $arrdata['publication']; ?>"  placeholder="Enter Publisher name" id="pub" name="pub" required>
  </div>
  <div class="form-group">
    <label for="edition">Edition:</label>
    <input type="text" class="form-control" placeholder="Enter Edition" value="<?php echo $arrdata['edition']; ?>"  id="edition" name="edition" required>
  </div>
  <div class="form-group">
    
    <label for="files">You can upload your book's pdf file here: </label>
    <input type="file" class="form-control" id="pdf" name="pdf" value="<?php echo $arrdata['files']; ?>"  required>

    
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