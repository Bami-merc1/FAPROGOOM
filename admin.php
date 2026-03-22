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