<?php 
include 'config.php';
	session_start();
// Store errors
if(isset($_POST['confirm']))
	{
	$email=$_SESSION['email'];
	$stmt=$db->prepare("SELECT id FROM  customers where email = '$email'");
	$stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];

    
	$order_details = htmlspecialchars($_POST['order_details']);
	$qty = htmlspecialchars($_POST['quantity']);
	$sql= "INSERT INTO orders(customer_id,OrderDetails,DateOrdered,Quantity)
			VALUES('$id','Wedding Card Layout1:  $order_details',now(),'$qty')";

if(mysqli_query($conn,$sql))
		{	
		  header('location: order_success.php');
		}   
		else{
			echo mysql_error();
		} 
		}	
		//echo '<script language="javascript">';
		 	//	echo 'alert("uccess...")';
				//echo '</script>';

	/*	if(!isset($_SESSION['email']))
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
		
}
*/
?>