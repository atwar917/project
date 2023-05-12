<?php

require 'dbconn.php';
$tbl_name="members"; // Table name 



// username and password sent from form 
$username='username'; 
$password='password'; 




$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
$result = $conn->query($sql);

// Mysql_num_row is counting table row
$count=$result->num_rows;

// If result matched $username and $password, table row must be 1 row
if($count==1){
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
	
	header("Location: menu.html"); /* Redirect browser */
exit();
}
else{
  header("Location: index.html?error=invalid");
  exit();
}
?>