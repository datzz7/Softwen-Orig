<?php 
include 'config.php';
session_start();

if(isset($_POST['available']))
{	

    $username=$_SESSION['username'];
	$stmt=$db->prepare("SELECT * FROM  login where username = '$username' ");
	$stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];   
    $name = $row['name'];

    $sql="INSERT INTO availability_table(id,name,availability,set_date)
    		VALUES ('$id','$name','Available',now())";

		if(mysqli_query($conn,$sql))
			{	
			    header('location: artist_account.php');
			}  
			else{ 

				$sql = "UPDATE availability_table SET availability='Available', set_date = now() WHERE id='$id' ";
				mysqli_query($conn,$sql);
				  header('location: artist_account.php');
			}
		 
}

elseif(isset($_POST['not_available']))
{
	$username=$_SESSION['username'];
	$stmt=$db->prepare("SELECT * FROM  login where username = '$username' ");
	$stmt->execute();
    $row = $stmt->fetch();
    $id = $row['id'];   
    $name = $row['name'];

    $sql="INSERT INTO availability_table(id,name,availability)
    		VALUES ('$id','$name','Not Available')";

		if(mysqli_query($conn,$sql))
			{	
			    header('location: artist_account.php');
			}  
			else{

				$sql = "UPDATE availability_table SET availability='Not Available',set_date=now() WHERE id='$id'";
				 mysqli_query($conn,$sql);
				   header('location: artist_account.php');	 
					}
}

mysqli_close($conn);
?>