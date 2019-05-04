
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
    <link href="bootstrap/css/ftlp_page.css" rel="stylesheet">
    
    <link href="gallerymodal.css" rel="stylesheet">  
    
  </head>

  <body>

   <?php include'header.php';?>
    <!-- Page Content -->
    <div class="container">

      <!-- Jumbotron Header -->
      <div class="jumbotron"> 
        <h1 class="display-3">A Warm Welcome!</h1>
        <p class="lead">We understand that each customer is unique and we ensure that our invitations reflect the unique personality of each customer we work with. From simple invites to fully coordinated wedding stationery, there are no limits to what we can create.
        </p>
        <a href="#" class="btn btn-primary btn-lg">View Gallery</a>
      </div>

      <!-- Page Features -->
<div class="row text-center">

        <div class="col-lg-3 col-md-6 mb-4">
          <div class="card">
            <img class="card-img-top" src="pic/wedding.jpg" alt="">
            <div class="card-body">
              <h4 class="card-title">Wedding</h4>
              <p class="card-text">Select this sample.</p>
           </div>
            <div class="card-footer">
              <a class="btn btn-primary modal-trigger" href="#modal1">View Gallery</a>
              <div id="modal1" class="modal">
                <div class="modal-content">
                  <form action="" method="post">
                  <img src="pic/wedding.jpg">
                  Input Order Details:                 
<textarea rows="6" cols="50" name="orddetails">
1.) Details: 
2.) Size: 
3.) Date of usage: 
</textarea> 
                  <button type="submit" class="confirmbtn">Confirm</button>
           <button type="submit" class="cancel" style="background-color:#f44336">Cancel</button>
                
                </div>
                <div class="modal-footer">
                    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
                </form>
              </div>      
              </div>
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


    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
           
<script> 
$(document).ready(function(){
  $('#modal1').modal();
});
</script>
  </body>

</html>



















