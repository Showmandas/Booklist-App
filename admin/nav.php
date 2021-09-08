<?php
session_start();
if(!isset($_SESSION['username'])){
    header('location:login.php');
  }
  
?>

<nav class="navbar navbar-expand-md navbar-dark" style=" background: rgba(20,150,120,0.7);">
  <!-- Brand -->
  <a class="navbar-brand p-0" href="index.php">
  <img src="../images/logo.png" alt="logo pic" class="rounded-circle" style="width: 40px">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
<li class="nav-item">

<a href="usershow.php" class="nav-link text-light">Show  User</a>
</li>
<li class="nav-item">

<a href="addbook.php" class="nav-link text-light">Add Books</a>
</li>
<li class="nav-item">

<a href="yourBooks.php" class="nav-link text-light">Your Books</a>
</li>

    </ul>
   <ul class="navbar-nav ml-auto px-5">
   <li class="nav-item text-light">
      <div class="input-group input-group-sm mt-2">
    <span class="input-text">Dark/Light</span>&nbsp;&nbsp;
  <input type="checkbox" class="my-2" id="selector">
</div>
      </li>
      <li class="nav-item ml-5 text-light">
<?php
if(isset($_SESSION['username'])){

  ?>    
  <!-- <a class="nav-link text-light" href="#"><?php echo $_SESSION['username'];?>&nbsp;<i class="fa fa-user-circle" aria-hidden="true"></i></a>  -->

<?php
}
?>
</li>
    <li class="nav-item ml-5 text-light">
        <a class="nav-link text-light" href="logout.php">Logout</a>
    
      </li>
    </ul>
  </div>
</nav>
