<?php
session_start();

// Database setup
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "omps_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Display products
$query = "SELECT * FROM product_list";
$result = $conn->query($query);
$products = $result->fetch_all(MYSQLI_ASSOC);

if (isset($_GET['add_to_cart'])) {
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }
    
    $product_id = $_GET['add_to_cart'];
    $_SESSION['cart'][] = $product_id;
    
    header("Location: cart.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>
    <h1>Product List</h1>
    <ul>
        <?php foreach ($products as $product): ?>
            <li>
                <h3><?= $product['title'] ?></h3>
                <p>Price: $<?= $product['selling_price'] ?></p>
                <a href="?add_to_cart=<?= $product['id'] ?>">Add to Cart</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>