<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Your Home Page</title>
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
  <div id="profile">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
  </div>
</body>

</html>