   <?php
                include "config.php";
                if(isset($_POST['email']) && isset($_POST['password']))
                {
                  $username = $_POST['email'];
                  $password = md5($_POST['password']);
                  $stmt = $db->prepare("SELECT * FROM  customers WHERE email=? AND password=?");
                  $stmt->bindParam(1, $username);
                  $stmt->bindParam(2, $password);
                  $stmt->execute();
                  $row = $stmt->fetch();
                  $user = $row['email'];
                  $pass = $row['password'];
                  $ID = $row['ID'];
                 
                  if($username==$user && $password==$pass)
                  {
                    session_start();
                    $_SESSION['email'] = $user;
                    $_SESSION['password'] = $pass;
                    $_SESSION['ID'] = $ID;
                   
                    
                    ?>
                    <?php include "logging_in.php"; ?>
                    <script>window.location.href='customer_login.php'</script>
                   <?php 
                 } else{ 
                  
                 echo '<script language="javascript">';
                  echo 'alert("Email or Password does not match!.")';      
                     echo '</script>';
                  ?>
                  <!--<div class="alert alert-danger" role="alert">
                    Username or password does not match!
                    </div> -->
                  <?php

                }
                }
                ?>
                 