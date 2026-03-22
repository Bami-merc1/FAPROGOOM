<<<<<<< HEAD
<div class="container mt-5">
    <h2 class="text-kings-green fw-bold">Admin Dashboard: Add New Product</h2>
    <form action="add_product.php" method="POST" class="p-4 shadow-sm bg-white rounded">
        <div class="mb-3">
            <label class="form-label">Product Name</label>
            <input type="text" name="name" class="form-control" placeholder="e.g. Day Old Chicks" required>
        </div>
        <div class="row">
            <div class="col-md-6 mb-3">
                <label class="form-label">Price (₦)</label>
                <input type="number" name="price" class="form-control" required>
            </div>
            <div class="col-md-6 mb-3">
                <label class="form-label">Icon (FontAwesome)</label>
                <input type="text" name="image_icon" class="form-control" placeholder="fa-kiwi-bird">
            </div>
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" class="form-control" rows="3"></textarea>
        </div>
        <button type="submit" class="btn bg-kings-green text-white w-100">Upload to Shop</button>
    </form>
</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAPROGOOM | Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>:root { --k-green: #008000; } .bg-kings-green { background-color: var(--k-green) !important; }</style>
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2 class="text-kings-green fw-bold mb-4">Admin Dashboard: Add New Product</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data" class="p-4 shadow-sm bg-white rounded">
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" name="name" class="form-control" placeholder="e.g. Day Old Chicks" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Price (₦)</label>
                <input type="number" step="0.01" name="price" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image <small>(JPG, PNG, GIF, WEBP – max 5MB)</small></label>
                <input type="file" name="image" class="form-control" accept="image/*" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Description</label>
                <textarea name="description" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn bg-kings-green text-white w-100">Upload to Shop</button>
        </form>
    </div>
</body>
</html>
>>>>>>> 98221e6 (re-edit of the revious commit)
