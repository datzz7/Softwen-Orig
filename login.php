  <!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <style type="text/css">
      div.container{
        margin-top: 120px;
      }
    </style>
  </head>

  <body>
    
    <div class="container">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <div class="panel panel-default">
              <div class="panel-body">
                <?php
                include "config.php";
                if(isset($_POST['username']) && isset($_POST['password']))
                {
                  $username = $_POST['username'];
                  $password = md5($_POST['password']);
                  $stmt = $db->prepare("SELECT * FROM  login WHERE username=? AND password=?");
                  $stmt->bindParam(1, $username);
                  $stmt->bindParam(2, $password);
                  $stmt->execute();
                  $row = $stmt->fetch();
                  $user = $row['username'];
                  $pass = $row['password'];
                  $id = $row['id'];
                  $type = $row['type'];
                  if($username==$user && $password==$pass)
                  {
                    session_start();
                    $_SESSION['username'] = $user;
                    $_SESSION['password'] = $pass;
                    $_SESSION['id'] = $id;
                    $_SESSION['type'] = $type;
                     if($type=='ProjectLeader')
                     {
                    ?>
                    <script>window.location.href='projectleader.php'</script>
                   <?php 
                 } else{ 
                 ?> <script>window.location.href='  artist.php'</script>
                   <?php 
                  }
                  }  else{
                  ?>
                  <div class="alert alert-danger" role="alert">
                    Username or password does not match!
                    </div>
                  <?php

                }
                }
                ?>
                <form method="post">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control"/>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control"/>
                  </div>
                  <input type="submit" name="submit" value="login" class="btn btn-primary" />
                </form>
              </div>
            </div>
            </div>
          <div class="col-md-4"></div>    
    </div>
  </div>


  </body>
</html>