<?php
include 'include/header.php';
include 'include/navbar.php';
?>

<div class="main">
<form action="post_check.php" method="post" enctype="multidata/form-data">
<div class="card-panel">
<?php
if(isset($_POST['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<h5>Title For Post</h5>
<textarea name="title"  class="materialize-textarea" placeholder="title for post"></textarea>
<h5>Post Content</h5>
<textarea name="ckeditor" id="ckeditor" class="ckeditor"></textarea>
<div class="center">
 <input type="submit" value="publish" name="publish" class="white-text #ab47bc purple lighten-2 btn">
</div><!--/center-->
</div><!--/card-panel-->
</form>


</div><!--/main-->


<script src="//cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
<?php

include 'include/footer.php';
?>
