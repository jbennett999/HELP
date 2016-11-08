<!DOCTYPE html>
<?php
  $ini = parse_ini_file('config.ini');
?>
<html>
<head>
  <title><?php echo $ini['app_name'];?></title>
  <link rel="stylesheet" href="include/help.css">
  <link rel="stylesheet" href="include/fa/css/font-awesome.min.css">
</head>

<body>

<i class="fa fa-camera-retro"></i> fa-camera-retro <br>
<?php
  echo $ini['db_name'];  // mydatabase
  echo "<br>";
  echo $ini['db_user'];  // myuser
  echo "<br>";
  echo $ini['app_name']; // mypassword
?>

<div id="navcontainer">
  <ul>
    <li><a href="#"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a></li>
    <li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Login</a></li>
    <li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Knowledgebase</a></li>
    <li><a href="#"><i class="fa fa-cog fa-fw" aria-hidden="true"></i>Ask a Question</a></li>
    <li><a href="#"><i class="fa fa-bullhorn fa-fw" aria-hidden="true"></i>Request</a></li>
  </ul>
</div>

</body>
</html>