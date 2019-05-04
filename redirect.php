<?php 
  include 'orders.php';
  
  if(!isset($_SESSION['email']))
    {
        echo '<script language="javascript">';
        echo 'alert("You must be logged in first to proceed....")';
        echo '</script>';
        ?>
        <script type="text/javascript">
          window.location.href = "ftlp_page.php";
        </script>
        <?php
    }
 
?>
<!DOCTYPE html>
<html>
<head>
  <title>Orders</title>
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <style type="text/css">
    
    img{
      padding-top: 100px;
      height: 400px;
      vertical-align: top;
    }

    div.left{
      width: 200px;
      height: 100px;
      float: left;

    }
    h1{
    padding-top: 100px;
     width: 800px;
      height: 100px;
      float: right;
    }

    div.right{
      padding-top: 5px;
     width: 800px;
      height: 100px;
      float: right;
    }
    label{
      padding-top: 60px;
     width: 800px;
      height: 100px;
      float: right;
    }


  textarea {
    width: 300px;
    height: 150px;
    padding: 15px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
    

  </style>
   
</head>
<body>
  <?php  if(isset($_SESSION['email']))
    {
      include'header_login.php';
}else{
  include 'header.php';
} 
        ?>

<form action="orders.php" method="post">
<div class="container">
    <div class="left">
     <img src="pic/wed1.jpg">
    <p style="font-family: Times New Roman; font-size: 20px; width: 280px;"> 
"Wishing you a lifetime of love and happiness." </p> 
Size: 3.25 x 4.5  inches</br>
Price: $5 per piece</br>
Envelope: Standard
</div> 
 <h1>Wedding Card</h1>
 <label>Details</label>
    <div class="right">
      <div class="form-group">
      <textarea placeholder="Enter Order Details                               ex. Qoutes, Fonts etc.." required name="order_details" id="order_details"></textarea>
      </div>Quantity:
      <input type="number" name="quantity" min="1" max="60" value="1"></br> </br>
         <button type="submit" class="confirmbtn" name="confirm">Confirm</button>
          <input type="button" onclick="location.href='wedding.php';" value="Cancel" name="cancelorder" >
     </div>
   
</div>
 </form>


<!--
1.) Details: 
2.) Size: 
3.) Date of usage: 
-->
   <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>