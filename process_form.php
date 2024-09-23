<?php 
$host = "localhost";
$username = "root";
$password = "lodhiaman@123";
$database = "inventory_dashboard";

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = mysqli_real_escape_string($conn, $_POST['productName']);
    $productPrice = mysqli_real_escape_string($conn, $_POST['productPrice']);
    $productQuantity = mysqli_real_escape_string($conn, $_POST['productQuantity']);
    $purchaseDate = mysqli_real_escape_string($conn, $_POST['purchaseDate']);
    
    // Calculate total price
    $totalPrice = $productPrice * $productQuantity;

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO products (name, price, quantity, total_price, purchase_date) VALUES ('$productName', '$productPrice', '$productQuantity', '$totalPrice', '$purchaseDate')";
    
    if (mysqli_query($conn, $sql)) {
        // Redirect to the view_products.php page
        header("Location: view_products.php");
        exit(); // Stop further execution
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

// Close the connection
mysqli_close($conn);
?>
