<div class="container">
    <h3>List of Products</h3>

    <!-- Button to navigate to the Add Product page -->
    <a href="<?= base_url('products/add'); ?>" class="btn btn-primary mb-3">
        Add New Product
    </a>

    <div class="row">
        <?php if (!empty($products)): ?>
            <?php foreach ($products as $product): ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <div class="card-body">
                        <h5 class="card-title"><?= esc($product['productname']); ?></h5>
                        <h6 class="card-subtitle mb-2 text-muted">Barcode: <?= esc($product['barcode']); ?></h6>
                        <p class="card-text">
                            <strong>Description:</strong> <?= esc($product['description']); ?><br>
                            <strong>Unit:</strong> <?= esc($product['unit']); ?><br>
                            <strong>Purchase Price:</strong> ₱<?= esc(number_format($product['purchaseprice'], 2)); ?><br>
                            <strong>Selling Price:</strong> ₱<?= esc(number_format($product['sellingprice'], 2)); ?><br>
                            <strong>Wholesale Price:</strong> ₱<?= esc(number_format($product['wholesaleprice'], 2)); ?><br>
                            <strong>Delivery Date:</strong> <?= esc(date('Y-m-d', strtotime($product['deliverydate']))); ?><br> <!-- Corrected -->
                            <strong>Date Created:</strong> <?= esc(date('Y-m-d', strtotime($product['dateencoded']))); ?><br> <!-- Corrected -->
                            <strong>Supplier:</strong> <?= esc($product['supplier']); ?><br> <!-- Corrected -->
                        </p>          
                        </div>
                        <div class="card-footer d-flex justify-content-between">
                        <a href="<?= base_url('products/view/'.$product['id']); ?>" class="btn btn-sm btn-warning">View</a> <!-- Corrected -->
                        <a href="<?= base_url('products/edit/'.$product['id']); ?>" class="btn btn-sm btn-secondary">Edit</a> <!-- Corrected -->
                        <a href="<?= base_url('products/delete/'.$product['id']); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this product?');">Delete</a> <!-- Corrected -->
                    </div>

                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div class="col-12 text-center">
                <p>No products found</p>
            </div>
        <?php endif; ?>
    </div>
</div>
