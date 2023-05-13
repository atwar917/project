<?php
 require 'dbconn.php';

$cid = $_POST['cid'];
$ccid = $_POST['ccid'];

$total_price = $_POST['total_price'];

$sql = "insert into CustomerOrder_T (cid,ccid,total_price)
        values ('$cid', '$ccid', '$total_price');

if ($conn->query($sql)== TRUE) {
    ECHO "New order created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>