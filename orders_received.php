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

 tr:nth-child(even){background-color: #f2f2f2;}

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


 $sql = "SELECT  OrderNo,OrderDetails,DateOrdered,Quantity from order_request";

 $result = $conn-> query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>OrderNo</th><th>OrderDetails</th><th>DateOrdered</th><th>Quantity</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["OrderNo"]. "</td><td>" . $row["OrderDetails"]. "</td><td>". $row["DateOrdered"]. "</td><td> " . $row["Quantity"]  .  "</td></tr>";
    }
    echo "</table>";
} 


$conn->close();
?> 
</body>
</html>
