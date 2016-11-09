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
  <h1>How can I help?</h1>
  
  <div id="custom-search-input">
    <div class="col-md-1"></div>
    <div class="input-group col-md-10">
      <input type="text" class="form-control input-lg" placeholder="Enter topic, keyword or question" />
      <span class="input-group-btn">
        <button class="btn btn-default btn-lg" type="button">
          <i class="glyphicon glyphicon-search"></i>
        </button>
      </span>
    </div>
    <div class="col-md-1"></div>
  </div>

<!-- Sections
	- This will be the place for status, knowledgebase, forums, feature requests, tickets, etc
-->
</div>
<div class="container">
  <div class="row text-center">
    <div class="col-sm-4">
      <div class="well">
      <h3>Status</h3>
      <h1><span class="glyphicon glyphicon-alert"></span></h1>
      <p>This part will be the window to the status page.</p>
      
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">What is this?</button>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Status</h4>
      </div>
      <div class="modal-body">
        <p>This will be the portal to the status page of the site. The Status page will list services and their current stauts (up, down, issues, etc) along with a historical record of past issues. Inspired by the <a href="https://www.google.com/appsstatus#hl=en&v=status">G Suite Status Dashboard</a></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- End Modal -->

      <div class="alert alert-success">No Issues Reported</div>
      <div class="alert alert-info">Information</div>
	  <div class="alert alert-warning">Sme performance impacted</div>
      <div class="alert alert-danger">A Major Issue is occuring</div>
    </div>
    
    </div>
    <div class="col-sm-4">
    <div class="well">
      <h3>Tickets</h3>
      <h1><span class="glyphicon glyphicon-list-alt"></span></h1>
      <p>Service Requests</p>
        <button type="button" class="btn btn-primary">My Tickets <span class="badge">7</span></button>
        <button type="button" class="btn btn-warning">New Ticket</button>
        <br>Open Tickets<br><br>
        <button type="button" class="btn btn-primary">My Tickets</button>
        <button type="button" class="btn btn-warning">New Ticket</button>
        <br>No open Tickets (but 1+ closed tickets)<br><br>
        <button type="button" class="btn btn-primary disabled">My Tickets</button>
        <button type="button" class="btn btn-warning">New Ticket</button>
        <br>No tickets
    </div>
    </div>
    <div class="col-sm-4">
    <div class="well">
      <h3>Requests</h3> 
      <h1><span class="glyphicon glyphicon-bullhorn"></span></h1>
      <p>A section for feature requests with +1 voting</p>
      <button type="button" class="btn btn-danger btn-block">Danger</button>
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