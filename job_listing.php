<?php 
include 'config.php';

if(isset($_POST['send_order']))

{	
	$sql = "INSERT INTO order_request(OrderNo,OrderDetails,DateOrdered,Quantity)
			SELECT OrderNo,OrderDetails,DateOrdered,Quantity from orders 
			";
	if(mysqli_query($conn,$sql))
			{	
			    header('location: orders-highlight.php');
			}
			else{
				
				header('location: orders-highlight.php');
			}
				}
				$conn->close();


?>