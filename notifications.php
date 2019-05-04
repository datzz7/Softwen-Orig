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
  

    <title>Notifications</title>

    <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
    
    <link href="" rel="stylesheet">
    
  </head>


  <body>
    <form action="" method="get">
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:13%">
  <h3 class="w3-bar-item">Menu</h3>
  <a href="artist_account.php" class="w3-bar-item w3-button">Account</a>
  <a href="notifications.php"  class="w3-bar-item w3-button"">Notifications</a>
  <a href="#" class="w3-bar-item w3-button">Project Progress</a>
  <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
</div>
</form>

<!-- Page Content -->
<div style="margin-left:13%">

<div class="w3-container w3-teal">
  <h1>Artists Dashboard</h1>
</div>


<?php
    $username=$_SESSION['username'];
    $sesid=$_SESSION['id'];
    $stmt=$db->prepare("SELECT * FROM  availability_table where id='$sesid'  ");
    $stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id']; 
    $avail = $row['availability'];

if($avail=='Available')
{
include 'orders_received.php';
}
?>


<?php
  
?>
  </body>
</html>
