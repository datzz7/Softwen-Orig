<div class="container" name="dropdown">
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      <?php if(isset($_SESSION['email']))
      {
        echo $_SESSION['email']; 
      }
      ?>
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="#">My Account</a>
      <a class="dropdown-item" href="#">Orders List</a>
      <a class="dropdown-item" href="#">Dats pogi</a>
      <div class="dropdown-divider"></div>
      <a class="dropdown-item" href="customer_logout.php">Log Out</a>
    </div>  
     
  </div>
</div>
