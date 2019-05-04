<!DOCTYPE html>
<html>
<head>
<style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

 td,  th {
    border: 1px solid #ddd;
    padding: 8px;
}

 /*tr:nth-child(even){background-color: #f2f2f2;}*/

 tr:hover {background-color: #ddd;}

 th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
</head>
<body>
<?php
include 'config.php';
//insert kung wala pa didto or i default nko

 $sql = "SELECT  l.id, l.username,l.name,a.availability from login l inner join availability_table a on l.id>1 and l.id=a.id ";

 $result = $conn-> query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>UserName</th><th>Name</th><th>Availability</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["username"]. "</td><td> " . $row["name"]. "</td><td>".
        $row["availability"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</body>
</html>
