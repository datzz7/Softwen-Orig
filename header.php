 <style type="text/css">
   input[type=email] {
    width: 100%;
    padding: 5px 7px;
    margin: 8px 0;
    box-sizing: border-box;
}

 </style>
 <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="ftlp_page.php">FTLP</a>
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
              <li class="nav-item">
              <a class="btn btn-success" onclick="document.getElementById('id01').style.display='block'" href="#login" >Login</a>
              <div id="id01" class="modal"> 
                <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>

               <form class="modal-content animate" method="post"> 
                <div class="container-modal">           
                 <?php include 'loog.php'; //user log in php?>
                 <label><b>Email</b></label> 
                 <input type="text" placeholder="Enter Email" name="email" required autocomplete="off"> 
                 <label><b>Password</b></label> 
                 <input type="password" placeholder="Enter Password" name="password" required> 
                 <div class="clearfix"> 
                  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> 
                  <button type="submit" class="loginbtn">Login</button> 
               </form>  
                 </div> 
                </div> 
              </div> 
              </li>
<!--Sign up -->
              <li class="nav nav-pills">
              <a class="nav-link active" onclick="document.getElementById('id02').style.display='block'" href="#signup">Sign Up</a>
              <div id="id02" class="modal"> 
                <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">×</span> 
     
               <form class="modal-content animate"  action="" method="post" autocomplete="off"> 
                <div class="container-modal">  
                <?php include 'signup.php'; //user register?>  
                 <label><b>Name</b></label> 
                 <input type="text" placeholder="Enter Name" name="name" required> 
                 <label><b>Email</b></label> 
                 <input type="email" placeholder="Enter Email" name="regemail" required> 
                 <span style="color:red"> <?php echo htmlentities($errors); ?></span></br>
                 <label><b>Password</b></label> 
                 <input type="password" placeholder="Enter Password" name="regpassword" required> 
                 <label><b>Repeat Password</b></label> 
                 <input type="password" placeholder="Repeat Password" name="psw-repeat" required>   
                 <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p> 
                 <div class="clearfix"> 
                  <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button> 
                  <button type="submit" class="signupbtn" name="signup">Sign Up</button> 
               </form> 
                 </div>     
               </div> 
              </div> 
              </li>          
             </ul>
          </div>
    </nav>


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