<?php
  include "config.php";
  session_start();
  if(!isset($_SESSION['username']))
  {
    header('location: login.php');
  }


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
  

    <title>My Account</title>

    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    
    <link href="" rel="stylesheet">
    <style type="text/css">
      div.container{
        float: left;
        padding-top: 50px;
        padding-left: 50px;
      }
    </style>
  </head>


  <body>
    <!-- Sidebar -->
    <form action="" method="get">
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:13%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="#" type="submit" class="w3-bar-item w3-button">Account</a>
  <a href="notifications.php"  class="w3-bar-item w3-button"">Notifications</a>
  <a href="#" class="w3-bar-item w3-button">Project Progress</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
</div>
</form>



<!--Header -->
<div style="margin-left:13%">

<div class="w3-container w3-teal">
  <h1>Artists Dashboard</h1>
</div>

<!-- Button -->
 
<form action="availability.php" method="post">
  <div class="container">
    <div class="content">
    <h6 style="font-size: 25px;"><strong> Set Availability</strong></h6>
    <button type="submit" id="123 "name="available" onclick="alert('Availability status has been set to (Available).');" value="Available">Available</button>
    <button type="submit" name="not_available" onclick="alert('Availability status has been set to (Not Available).');">Not Available</button>
    </div>
  </div>
</form>
 


    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
