<?php
session_start();
<<<<<<< HEAD
// Security check: If not logged in, kick back to login page
if (!isset($_SESSION['admin_logged_in'])) { 
    header("Location: admin_login.php"); 
    exit(); 
=======
if (!isset($_SESSION['admin_logged_in'])) { 
    header("Location: admin_login.php"); exit(); 
>>>>>>> 98221e6 (re-edit of the revious commit)
}

$conn = new mysqli("localhost", "root", "", "faprogoom_db");

<<<<<<< HEAD
// Handle Deletion
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']); // Security: Ensure ID is an integer
=======
// Delete
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
>>>>>>> 98221e6 (re-edit of the revious commit)
    $conn->query("DELETE FROM products WHERE id=$id");
    header("Location: admin_dashboard.php");
}

$products = $conn->query("SELECT * FROM products");
?>
<<<<<<< HEAD

=======
>>>>>>> 98221e6 (re-edit of the revious commit)
<!DOCTYPE html>
<html>
<head>
    <title>FAPROGOOM | Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-4">
<<<<<<< HEAD
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-success fw-bold">Manage Products</h1>
        <a href="admin.php" class="btn btn-success">Add New Product</a>
=======
    <?php if(isset($_GET['success'])) echo '<div class="alert alert-success">'.htmlspecialchars($_GET['success']).'</div>'; ?>
    
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-success fw-bold">Manage Products</h1>
        <a href="admin.php" class="btn btn-success">+ Add New Product</a>
>>>>>>> 98221e6 (re-edit of the revious commit)
    </div>
    
    <table class="table table-hover shadow-sm bg-white">
        <thead class="table-dark">
            <tr>
<<<<<<< HEAD
=======
                <th>Image</th>
>>>>>>> 98221e6 (re-edit of the revious commit)
                <th>Name</th>
                <th>Price (₦)</th>
                <th class="text-center">Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = $products->fetch_assoc()): ?>
            <tr>
<<<<<<< HEAD
=======
                <td><img src="<?php echo htmlspecialchars($row['image_icon']); ?>" width="80" class="img-thumbnail"></td>
>>>>>>> 98221e6 (re-edit of the revious commit)
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo number_format($row['price'], 2); ?></td>
                <td class="text-center">
                    <a href="edit_product.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this product?')">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>