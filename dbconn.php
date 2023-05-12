<?php
// Connection

$servername = "studentdb-maria.gl.umbc.edu";
$username = "tvu8";
$password = "tvu8";
$dbname = "tvu8";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>