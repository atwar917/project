<?php
 require 'dbconn.php';
$cid = $_POST['cid'];
$ccid = $_POST['ccid'];

$total_price = $_POST['total_price'];

$query = "SELECT * FROM toppings";

$result = $conn->query($query);

if ($result->num_rows > 0) {
  // Fetch and store the ingredients in an array
  $ingredients = [];
  while ($row = $result->fetch_assoc()) {
    $ingredients[] = $row;
  }
} else {
  echo "No ingredients found.";
}

foreach ($ingredients as $ingredient) {
    echo '<button onclick="handleIngredientClick(' . $ingredient['id'] . ')">' . $ingredient['name'] . '</button>';
  }
  






// $sql = "insert into CustomerOrder_T (cid,ccid,total_price)
//         values ('$cid', '$ccid', '$total_price');

if ($conn->query($sql)== TRUE) {
    ECHO "Order created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>