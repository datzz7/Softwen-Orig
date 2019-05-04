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
  
    <title>Order List</title>

    <link href="bootstrap/css/w3.css" rel="stylesheet">
      <style type="text/css">

        .footer{
           position: fixed;
           left: 0px;
           bottom: 0;
           width: 100%;
                }
        div.container{
           float: right;
           padding-right: 50px;
        }

      </style>
  </head>


  <body>


    <form action="" method="post">
        <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:13%">
          <h3 class="w3-bar-item">Menu</h3>
          <a href="#" class="w3-bar-item w3-button">Account</a>
          <a href="arts.php"  class="w3-bar-item w3-button">Artists List</a>
          <a href="#" type="submit" class="w3-bar-item w3-button">Orders List</a>
          <a href="logout.php" class="w3-bar-item w3-button">Log Out</a>
        </div>
    </form>

<!-- Page Content -->
<div style="margin-left:13%">


<div class="w3-container w3-teal">
  <h1>Project Leader Dashboard</h1>
</div>


<?php
include 'order-list.php';
?>
</br></br>
   <div class="container">
    <form action="job_listing.php" method="post">
    <button type="submit" name="send_order" onclick="alert('Success!');">Send Order Requests</button>
    </form>
   </div>
   
   <div class="footer">
<?php 
  include 'pagination.php';
?>
</div>




</body>
</html>


  
    

