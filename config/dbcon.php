<?php 
$host = "localhost";
$username = "root";
$password = "lodhiaman@123";
$database = "inventory_dashboard";

//connection
$conn = mysqli_connect($host, $username, $password, $database);

if(!$conn)
{
    header("Location: ../errors/db.php");
    die();
}
else{
    echo "Connected successfully";
}
?>