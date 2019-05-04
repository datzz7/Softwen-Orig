<?php 
	include 'config.php';
	session_start();	
	
	$email=$_SESSION['email'];
	$sql = $db->prepare("SELECT name FROM  customers WHERE email='$email' ");
	$sql->execute();
	$row = $sql->fetch();
   	$name = $row['name'];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Order Success</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<style type="text/css">
		.content{
			display: none;
		}
	</style>
</head>
<body>
<div class='content'>
	<div class='container-fluid'>
 	 <div class='row'>
	 <div class='col-md-2'></div>
	 <div class='col-md-8'>
	  <div class="panel panel-default" align="center">
  	   <div class="panel-heading"></br></br></br></br></br></br><h1>Thank you!</h1></div>
  		<div class="panel-body">
    				Hello <?php echo "$name"; ?>, your order is successful.						
    				<br>
    				<p></p>
    				<a href="customer_login.php" class='btn btn-success btn-lg'>Back to store</a>
  		</div>
	   </div>
	 <div class='col-md-2'></div>
	</div>
	</div>
   </div>
</div>

<!--Pre-loader -->
	<div class="preload"><img src="pic/loading1.gif" style="width:400px;
    height: 400px;
    position: relative;
    top: 0px;
    left: 469px;"></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	
	<script type="text/javascript">
		
    	
    	$(".preload").fadeOut(5000, function(){
        $(".content").fadeIn(500);        	
		}); 

	</script>
</body>
</html>