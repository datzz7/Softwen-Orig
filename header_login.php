   <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="customer_login.php">FTLP</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="about.html">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/services.html">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
        </div>
            </ul>
                  <!--Log in -->           
            <ul class="nav navbar-nav navbar-right">          
           <!-- <a class="nav-link active" href="customer_logout.php" name="logout" ">Logout</a>  -->
             <?php
             if(isset($_SESSION['email']))
             {
              include 'dropdown.php';
              }
              ?>
             
            </ul>
          </div> 
    </nav>