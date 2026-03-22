<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "faprogoom_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $desc = $_POST['description'];
    $icon = $_POST['image_icon'];

    $sql = "INSERT INTO products (name, price, description, image_icon) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sdss", $name, $price, $desc, $icon);

    if ($stmt->execute()) {
        header("Location: shop.html"); // Redirect to see the new product!
    } else {
        echo "Error: " . $conn->error;
    }
}
?>