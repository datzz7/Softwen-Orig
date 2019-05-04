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


    
  </head>

  <body>

   <?php include'header.php';?>
    <!-- Page Content -->
   

      <!-- Jumbotron Header -->
      
      <!-- Indicator -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="img/wedding05.jpg" style="height: 450px; width: 1200px;" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>C</h5>
              <!-- <p>Create unique invitation cards for every occasion with just a few clicks.</p>
              -->
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/wedding04.jpg" style="height: 450px; width: 1200px;" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>C</h5>
             <!-- <p>We explore all creative possibilities to transform your invitation into a fabulous first impression.</p>
             -->
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="img/wedding09.jpg" style="height: 450px; width: 1200px;" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>C</h5>
              <!--<p>Design, color, material, and special effects are elements we consider in crafting the perfect invitation.</p>
            -->      
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Page Features -->
       <div class="container">
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pic/wedding.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Wedding</h4>
              <p class="card-text">Select this sample.</p>
           </div>
            <div class="card-footer">
              <a href="wedding.php" class="btn btn-primary">View Gallery</a>
            </div>
          </div>
        </div>
     
<!--Modal For View -->

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pic/bday1.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Birthday</h4>
              <p class="card-text">Select this sample</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">View Gallery</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pic/baptism.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Baptism</h4>
              <p class="card-text">Select this sample</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">View Gallery</a>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pic/debut.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Debut</h4>
              <p class="card-text">Select this sample</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-primary">View Gallery</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>


<script> 

var modal = document.getElementById('id01'); 

window.onclick = function(event) { 
  if (event.target == modal) { 
    modal.style.display = "none"; 
  } 
} 

var modal = document.getElementById('id02'); 

window.onclick = function(event) { 
  if (event.target == modal) { 
    modal.style.display = "none"; 
  } 
} 
</script> 
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
