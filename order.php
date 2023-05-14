<?php
 require 'dbconn.php';
$cid = $_POST['cid'];
$ccid = $_POST['ccid'];

$total_price = $_POST['total_price'];

$query = "SELECT * FROM toppings";

$result = $conn->query($query);

if ($result->num_rows > 0) {
  // Fetch and store the ingredients in an array
  $toppings = [];
  while ($row = $result->fetch_assoc()) {
    $toppings[] = $row;
  }
} else {
  echo "No ingredients found.";
}

foreach ($toppings as $ingredient) {
    echo '<button onclick="handleIngredientClick(' . $ingredient['tid'] . ')">' . $ingredient['toppingName'] . '</button>';
  }
  



  function handleIngredientClick(ingredientId) {
    // You can add custom logic here based on the clicked ingredient
    // For example, you can add it to a shopping cart or perform any other action
  
    // Example: Add the ingredient ID to an array
    var selectedIngredients = []; // Declare an array to store selected ingredient IDs
    selectedIngredients.push(ingredientId); // Add the clicked ingredient ID to the array
  
    // Example: Display the selected ingredients in the console
    console.log("Selected Ingredients: ", selectedIngredients);
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
 