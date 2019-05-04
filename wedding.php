<?php 
  session_start();
  ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>FTLP|Home</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="design0.css" rel="stylesheet">
    <link href="gallerymodal.css" rel="stylesheet">  

   <style> 
   div.gallery {
    border: 1px solid #ccc;
}

div.gallery:hover {
    border: 1px solid #777;
}

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px) {
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px) {
    .responsive {
        width: 100%;
    }
}

.clearfix:after {
    content: "";
    display: table;
    clear: both;
}
</style>
    
  </head>

  <body>

   <?php 
   if(isset($_SESSION['email']))
    {
      include'header_login.php';
  }
  else{
  include 'header.php';
}
?>


 <!-- Page Content -->

<div class="clearfix">   
  <div class="responsive">
    <div class="gallery">
      <a href="redirect.php">
        <img src="pic/wed1.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary" onClick="location.href='redirect.php'">Order Layout</button></div> 
    </div>  
  </div>

  <div class="responsive">
    <div class="gallery">
      <a target="_self" href="pic/wed2.jpg">
        <img src="pic/wed2.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="">
        <img src="pic/wed3.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="">
        <img src="pic/wed4.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="">
        <img src="pic/wed5.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery"> 
      <a href="">
        <img src="pic/wed6.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="">
        <img src="pic/wed7.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>

  <div class="responsive">
    <div class="gallery">
      <a href="">
        <img src="pic/wed8.jpg" alt="Cinque Terre" width="600" height="400">
      </a>
      <div class="desc">$5.00 Delivery included.<button class="btn btn-primary">Order Layout</button></div>
    </div>
  </div>  

</div>


    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
