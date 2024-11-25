<div class="d-flex align-items-center justify-content-center">
    <div class="col col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Edit Product</h5>
            </div>
            <div class="card-body">
                <form action="<?= base_url('products/edit/'.$product['id']); ?>" method="post">
                    <div class="form-group mb-2">
                        <label for="barcode" class="form-label">Barcode</label>
                        <input type="text" name="barcode" id="barcode" class="form-control" value="<?= esc($product['barcode']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="productname" class="form-label">Product Name</label>
                        <input type="text" name="productname" id="productname" class="form-control" value="<?= esc($product['productname']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" name="description" id="description" class="form-control" value="<?= esc($product['description']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="unit" class="form-label">Unit</label>
                        <input type="text" name="unit" id="unit" class="form-control" value="<?= esc($product['unit']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="purchaseprice" class="form-label">Purchase Price</label>
                        <input type="number" step="0.01" name="purchaseprice" id="purchaseprice" class="form-control" value="<?= esc($product['purchaseprice']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="sellingprice" class="form-label">Selling Price</label>
                        <input type="number" step="0.01" name="sellingprice" id="sellingprice" class="form-control" value="<?= esc($product['sellingprice']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="wholesaleprice" class="form-label">Wholesale Price</label>
                        <input type="number" step="0.01" name="wholesaleprice" id="wholesaleprice" class="form-control" value="<?= esc($product['wholesaleprice']); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="deliverydate" class="form-label">Delivery Date</label>
                        <input type="datetime-local" name="deliverydate" id="deliverydate" class="form-control" value="<?= esc(date('Y-m-d\TH:i', strtotime($product['deliverydate']))); ?>" required>
                    </div>
                    <div class="form-group mb-2">
                        <label for="supplier" class="form-label">Supplier</label>
                        <input type="text" name="supplier" id="supplier" class="form-control" value="<?= esc($product['supplier']); ?>" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success">Save Changes</button>
                        <a href="<?= base_url('products'); ?>" class="btn btn-danger">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
