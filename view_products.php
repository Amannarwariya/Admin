<?php 
include('includes/header.php');
include('includes/topbar.php');
include('includes/sidebar.php');
?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">

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

// SQL query to fetch data
$sql = "SELECT id, name, price, quantity, total_price, purchase_date FROM products";
$result = mysqli_query($conn, $sql);

// Start HTML
echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Product List</title>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
</head>
<body>
<div class='container'>
    <h2 class='mt-5'>Product List</h2>
    <table class='table table-striped'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Product Name</th>
                <th>Price per Unit</th>
                <th>Quantity</th>
                <th>Total Price</th>
                <th>Purchase Date</th>
            </tr>
        </thead>
        <tbody>";

// Check if results exist
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>" . htmlspecialchars($row["id"]) . "</td>
                <td>" . htmlspecialchars($row["name"]) . "</td>
                <td>" . htmlspecialchars($row["price"]) . "</td>
                <td>" . htmlspecialchars($row["quantity"]) . "</td>
                <td>" . htmlspecialchars($row["total_price"]) . "</td>
                <td>" . htmlspecialchars($row["purchase_date"]) . "</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No products found</td></tr>";
}

echo "    </tbody>
        </table>
    </div>
</body>
</html>";

// Close connection
mysqli_close($conn);
?>

        </div>
    </div>
</div>

<?php 
include('includes/footer.php');
?>
