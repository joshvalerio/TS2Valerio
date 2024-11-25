<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Product Details</h5>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group mb-2">
                        <label for="id" class="form-label">ID</label>
                        <input type="text" name="id" id="id" class="form-control" value="<?= esc($product['id']); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="barcode" class="form-label">Barcode</label>
                        <input type="text" name="barcode" id="barcode" class="form-control" value="<?= esc($product['barcode']); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="productname" class="form-label">Product Name</label>
                        <input type="text" name="productname" id="productname" class="form-control" value="<?= esc($product['productname']); ?>" readonly>
                    </div>

                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Description</label>
                        <textarea name="description" id="description" class="form-control" rows="3" readonly><?= esc($product['description']); ?></textarea>
                    </div>
                    <div class="form-group mb-2">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" id="unit" class="form-control" value="<?= esc($product['unit']); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="purchaseprice" class="form-label">Purchase Price</label>
                        <input type="text" name="purchaseprice" id="purchaseprice" class="form-control" value="<?= esc(number_format($product['purchaseprice'], 2)); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="sellingprice" class="form-label">Selling Price</label>
                        <input type="text" name="sellingprice" id="sellingprice" class="form-control" value="<?= esc(number_format($product['sellingprice'], 2)); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                        <input type="text" name="wholesaleprice" id="wholesaleprice" class="form-control" value="<?= esc(number_format($product['wholesaleprice'], 2)); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="deliverydate" class="form-label">Delivery Date</label>
                        <input type="text" name="deliverydate" id="deliverydate" class="form-control" value="<?= esc(date('Y-m-d', strtotime($product['deliverydate']))); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="dateencoded" class="form-label">Date Created</label>
                        <input type="text" name="dateencoded" id="dateencoded" class="form-control" value="<?= esc(date('Y-m-d', strtotime($product['dateencoded']))); ?>" readonly>
                    </div>
                    <div class="form-group mb-2">
                        <label for="supplier" class="form-label">Supplier</label>
                        <input type="text" name="supplier" id="supplier" class="form-control" value="<?= esc($product['supplier']); ?>" readonly>
                    </div>
                    <div class="form-group">
                        <a href="<?= base_url('products'); ?>" class="btn btn-primary">Back to Products</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
