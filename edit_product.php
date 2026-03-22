<?php
$conn = new mysqli("localhost", "root", "", "faprogoom_db");
$id = intval($_GET['id']);
$product = $conn->query("SELECT * FROM products WHERE id=$id")->fetch_assoc();

if (isset($_POST['update'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $price = $_POST['price'];
    $desc = $conn->real_escape_string($_POST['description']);
<<<<<<< HEAD
    $icon = $conn->real_escape_string($_POST['image_icon']);

    $conn->query("UPDATE products SET name='$name', price='$price', description='$desc', image_icon='$icon' WHERE id=$id");
    header("Location: admin_dashboard.php");
=======
    $image_icon = $product['image_icon']; // keep old

    // New image uploaded?
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
        if (!is_dir($target_dir)) mkdir($target_dir, 0777, true);
        $ext = strtolower(pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION));
        if (in_array($ext, ['jpg','jpeg','png','gif','webp'])) {
            $new_name = time() . '_' . basename($_FILES['image']['name']);
            $target_file = $target_dir . $new_name;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
                $image_icon = $target_file;
            }
        }
    }

    $sql = "UPDATE products SET name='$name', price='$price', description='$desc', image_icon='$image_icon' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: admin_dashboard.php");
    } else {
        echo "Error: " . $conn->error;
    }
>>>>>>> 98221e6 (re-edit of the revious commit)
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light container py-5">
<<<<<<< HEAD
    <form method="POST" class="card p-4 shadow-sm mx-auto" style="max-width: 500px;">
        <h3 class="mb-3">Edit: <?php echo htmlspecialchars($product['name']); ?></h3>
        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" class="form-control mb-2" required>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" class="form-control mb-2" required>
        <input type="text" name="image_icon" value="<?php echo htmlspecialchars($product['image_icon']); ?>" class="form-control mb-2">
        <textarea name="description" class="form-control mb-3"><?php echo htmlspecialchars($product['description']); ?></textarea>
=======
    <form method="POST" enctype="multipart/form-data" class="card p-4 shadow-sm mx-auto" style="max-width: 600px;">
        <h3>Edit: <?php echo htmlspecialchars($product['name']); ?></h3>
        
        <?php if ($product['image_icon']): ?>
        <div class="mb-3">
            <label>Current Image</label><br>
            <img src="<?php echo htmlspecialchars($product['image_icon']); ?>" class="img-fluid rounded" style="max-width: 300px;">
        </div>
        <?php endif; ?>

        <div class="mb-3">
            <label>New Image (optional)</label>
            <input type="file" name="image" class="form-control" accept="image/*">
        </div>

        <input type="text" name="name" value="<?php echo htmlspecialchars($product['name']); ?>" class="form-control mb-2" required>
        <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" class="form-control mb-2" required>
        <textarea name="description" class="form-control mb-3"><?php echo htmlspecialchars($product['description']); ?></textarea>
        
>>>>>>> 98221e6 (re-edit of the revious commit)
        <button name="update" class="btn btn-success w-100">Save Changes</button>
    </form>
</body>
</html>