<?php
include 'include/header.php'
?>
<body>
<div class="row">

<div class="col l6 offset-l3 m8 offset-m2 s12">

<div class="card-panel center grey lighten-2" style="margin-bottom:0px;">
<ul class="tabs">
<li class="tab"><a href="#login" class="black-text">Login</a></li>
<li class="tab"><a href="#signup" class="black-text">Sign Up</a></li>
</ul>
</div><!--/card-panel-->

</div><!--/col-->
<!---Sign up and login area-->
<div class="col l6 offset-l3 m8 offset-m2 s12" id="login">
<div class="card-panel center #ce93d8 purple lighten-3 black-text" style="margin-top:1px;">
<h5>Login To Continue</h5>
<?php
if(isset($_SESSION['message'])){
    echo $_SESSION['message'];
    unset($_SESSION['message']);
}
?>
<form action="login_check.php" method="post">
<div class="input-field">
<input type="text" name="username" id="username" placeholder="Enter your Username">
</div><!--/username-input-->
<div class="input-field">
<input type="password" name="password" id="password" placeholder="Enter your Password">
</div><!--/password-input-->
<input type="submit" value="Log in" class="btn" name="login">
</form>
</div><!--/card-panel-->
</div><!--/login-->
<div class="col l6 offset-l3 m8 offset-m2 s12" id="signup">
<div class="card-panel center #ba68c8 purple lighten-2 black-text" style="margin-top:1px;">
<h5>Signup here</h5>
<form action="signup.php" method="post">
<div class="input-field">
<input type="email" name="email" id="email" placeholder="Enter your Email Id" class="validate">
<label for="email" data-error="Invalid Email Format" data-success="valid Email id"></label>

</div><!--/email-input-->
<div class="input-field">
<input type="text" name="username" id="username" placeholder="Enter your Username">
</div><!--/username-input-->
<div class="input-field">
<input type="password" name="password" id="password" placeholder="Enter your Password">
</div><!--/password-input-->
<input type="submit" value="Sign up" class="btn" name="signup">

</form>
</div><!--/card-panel-->
</div><!--/signup-->
</div><!--/row-->
<?php
include 'include/footer.php'
?>