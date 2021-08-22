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
<body>


<nav class="navbar navbar-expand-md navbar-dark" style=" background: rgba(120,20,20,0.7);">
  <!-- Brand -->
  <a class="navbar-brand p-0" href="index.php">
  <img src="images/logo.png" alt="logo pic" class="rounded-circle" style="width: 40px">
  </a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-light" href="booklist.php">Show Booklist &nbsp;<i class="fa fa-book" aria-hidden="true"></i>
</a>
      </li>
    </ul>
   <ul class="navbar-nav ml-auto px-5">
   <li class="nav-item text-light">
      <div class="input-group input-group-sm mt-2">
    <span class="input-text">Dark/Light</span>&nbsp;&nbsp;
  <input type="checkbox" class="my-2" id="selector">
</div>
      </li>
      <li class="nav-item ml-5">
      <a href='signup.php' class="btn btn-primary">Sign up</a>
<a href="login.php" class="btn btn-secondary">Log in</a>
      </li>
    </ul>
  </div>
</nav>

</body>
</html>