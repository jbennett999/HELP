<!DOCTYPE html>
<?php
  $ini = parse_ini_file('config.ini');
?>
<html>
<head>
  <meta charset="utf-8"> 
  <title><?php echo $ini['app_name'];?></title>
  <?php
    readfile("includes.php");
  ?>
</head>

<body>
<!-- Navigation -->
<?php
  readfile("nav.php");
?>
<!-- End Navigation -->

<!-- Top Part Jumbotron
	- This will basically be a big search page. Maybe also put alerts from the status page?
-->
<div class="jumbotron text-center">
  <h1>Login</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-8">
      <div class="well">

    </div>
    
    </div>
    <div class="col-sm-4">
    <div class="well">
      <h3>Sign In</h3>
<form>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form><br>
    <button type="button" class="btn btn-danger btn-block"><i class="fa fa-google"></i> Sign in with Google</button>
    </div>
    </div>
  </div>
</div>

<!--
<?php
  echo $ini['db_name'];  // mydatabase
  echo "<br>";
  echo $ini['db_user'];  // myuser
  echo "<br>";
  echo $ini['app_name']; // mypassword
?>
-->

</body>
</html>