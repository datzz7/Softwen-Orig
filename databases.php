<!-- <?php 
$servername ="localhost";
$username="root";
$password="";
$conn = new mysqli($servername,$username,$password);

if(mysqli_connect_error())
{
	die("Connection failed: " . mysqli_connect_error);
}
echo "Connection succesfully established";
$conn->close();

$sql= "CREATE DATABASE users";
if(mysqli_query($conn,$sql))
{
	echo "Database was successfully created";
}

$sql= "CREATE TABLE login (id int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
						   name varchar(50) NOT NULL,
						   email varchar(50) NOT NULL,
						   password varchar(50) NOT NULL,)";

if(mysqli_query($conn,$sql))
{
	echo "Table was successfully created";
}
	else {
		echo "ERROR: Could not able to execute sql " . mysqli_error($conn);
	}	
?> -->