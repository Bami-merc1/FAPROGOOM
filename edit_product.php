<?php
$conn = new mysqli("localhost", "root", "", "faprogoom_db");
$id = intval($_GET['id']);
$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $price = $_POST['price'];
    $desc = $conn->real_escape_string($_POST['description']);
    $icon = $conn->real_escape_string($_POST['image_icon']);

    $conn->query("UPDATE products SET name='$name', price='$price', description='$desc', image_icon='$icon' WHERE id=$id");
    header("Location: admin_dashboard.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container py-5">
    <form method="POST" class="card p-4 shadow-sm mx-auto" style="max-width: 500px;">
        <h3 class="mb-3">Edit: <?php echo htmlspecialchars($product['name']); ?></h3>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" class="form-control mb-2" required>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" class="form-control mb-2" required>
        <input type="text" name="image_icon" value="<?php echo htmlspecialchars($product['image_icon']); ?>" class="form-control mb-2">
        <textarea name="description" class="form-control mb-3"><?php echo htmlspecialchars($product['description']); ?></textarea>
        <button name="update" class="btn btn-success w-100">Save Changes</button>
    </form>
</body>
</html>