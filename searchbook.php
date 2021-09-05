
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search books</title>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" />
<link rel="stylesheet" href="style.css">
<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script> -->

</head>
<body  style="background-image:linear-gradient(to bottom, rgba(245, 246, 252, 0.3), rgba(117, 19, 93, 0.6)),
    url('images/bgimg.jpg');">
<div class="container">
<?php
  include 'header.php'
  ?>
  <?php
  include 'nav.php';
  ?>
    <div class="row">
<div class="col-md-8 offset-md-2  mt-5">
  <div class="card bg-info w-100 card-sm">
    <div class="card-body">
    <form class="form-inline" action="" method="POST">
    <input class="form-control mr-sm-2 form-control-lg rounded-0 px-5 w-75" name="search" id="search" type="text" placeholder="Search by  book title" aria-label="Search" autocomplete="off">
    <button class="btn btn-success my-2 my-sm-0 py-2 px-4" name="submit" type="submit">Search</button>
  </form>

    </div><!--/card-body-->
  </div><!--/card-->

  <div class="col-md-5" style="position:relative;margin-left:-13px;z-index:9">
      <div class="listgroup" id="show-list">

      </div><!--/listgroup-->
  </div><!--/col-md-5-->
</div>

<div class="table-responsive" style="top:60%;position:absolute;left:0;transform:translate(0%,0%)">

<table class="text-light table table-striped table-hover text-center  table-bordered table-dark" style="margin-top:30px;">
    <thead>
      <tr>
      <th>Book ID</th>
        <th>Title</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Edition</th>
        <th>Books</th>
        <th colspan="2">Actions</th>
      </tr>
    </thead>
    <tbody>
    <?php
include "dbcon.php";
if(isset($_POST['submit'])){
    $data=$_POST['search'];
    $titleq="select * from booklists where title='$data'";
    $q_run=mysqli_query($con,$titleq);
    
    if(mysqli_num_rows($q_run)>0){
     
      while($res=mysqli_fetch_array($q_run)){
    
        ?>
        
              <tr>
                <td><?php echo $res['id'];?></td>
                <td><?php echo $res['title'];?></td>
                <td><?php echo $res['author'];?></td>
                <td><?php echo $res['publication'];?></td>
                <td><?php echo $res['edition'];?></td>
                <td><?php echo $res['files'];?></td>
                <td> <a href="update.php?id=<?php echo $res['id'];?>" class="btn btn-success text-light"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
               </a> </td>
                <td> <a href="delete.php?id=<?php echo $res['id'];?>" class="btn btn-danger text-light"><i class="fa fa-trash" aria-hidden="true"></i>
               </a> </td>
               </tr>
          <?php
           }
      


}
}




  ?> 
  </table>

</div><!--/table-responsive-->

    </div><!---/row-->
</div><!--/container-->

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


<script type="text/javascript">
$(document).ready(function(){
    $("#search").keyup(function(){
        var searchText=$(this).val();
        if(searchText!=""){
            $.ajax({
url:'action.php',
method:'post',
data:{query:searchText},
success:function(response){
    $('#show-list').html(response); 
}
            });
        }
        else{
            $("#show-list").html("");
        }
    });
    $(document).on('click','a',function(){
     $('#search').val($(this).text());
     $("#show-list").html('');
    });

});

</script>
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