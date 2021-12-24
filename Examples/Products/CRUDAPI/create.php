<?php

$conn = mysqli_connect("localhost","root", "", "sampledb");

$pname = $_GET['PName'];
$price = $_GET['Price'];

$query = "INSERT INTO product (PName, Price) VALUES ('" . $pname . "'," . $price . ")";

if(mysqli_query($conn, $query))
{
     echo "success";
}
else
{
     echo "failed";
}

mysqli_close($conn);

?>
