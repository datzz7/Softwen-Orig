<?php
$conn = mysqli_connect("localhost","root","","users");

?>

  <!--

  <?php
$db = new pdo('mysql:host=localhost; dbname=users','root','');
?>


 
<?php 
$servername= "localhost";
$username="root";
$password="";
$dbname="users";

// Create connection
$conn = new mysqli($servername,$username,$password,$dbname);

// Check Connection
if ($conn->connect_error)
{
	die("Connection failed: ". $conn->connect_error);
}

echo "Connected";


 ?>
  -->
