<?php
include 'config.php';
$errors="";

if(isset($_POST['signup']))
{

	$name = htmlspecialchars($_POST['name']);
	$email = htmlspecialchars($_POST['regemail']);
	$password = htmlspecialchars($_POST['regpassword']);
	$psw_repeat = htmlspecialchars($_POST['psw-repeat']);
		
		$user_check_query= "SELECT * FROM customers WHERE email='$email'";
		$result = mysqli_query($conn, $user_check_query);
		$user = mysqli_fetch_assoc($result);

		if($user)
		{	
			if($user['email']==$email)
			{
				$errors= "Email is already used.";
			}
		

			if($password!=$psw_repeat)
				{
				echo '<script language="javascript">';
				echo 'alert("does not match....")';
				echo '</script>';
	   			 }
	   			 
		}
		else {
		$password = md5($password);
		$sql = "INSERT INTO customers(name,email,password) 
				VALUES('$name','$email','$password')";	
				
		if(mysqli_query($conn,$sql))
		{
		echo '<script language="javascript">';
		echo 'alert("Registered Successfully....")';
		echo '</script>';
		} 
		}
		
		
	}		


	$conn->close();



?>
