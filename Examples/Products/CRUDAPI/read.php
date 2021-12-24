<?php

$conn = mysqli_connect("localhost","root", "", "sampledb");

$pid = $_GET['PID'];

$records = mysqli_query($conn, "SELECT * FROM product WHERE ProductID = " . $pid);

$data = array();

while($row = mysqli_fetch_assoc($records))
{
    $data[] = $row; 
}

echo json_encode($data);

mysqli_close($conn);

?>
