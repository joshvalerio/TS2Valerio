<body>
    <div class="container">
        <h1><?= esc($title) ?></h1>
        <form action="<?= site_url('products/add'); ?>" method="post">
            <div class="form-group">
                <label for="barcode">Barcode:</label>
                <input type="text" class="form-control" name="barcode" required>
            </div>
            <div class="form-group">
                <label for="productname">Product Name:</label>
                <input type="text" class="form-control" name="productname" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <input type="text" class="form-control" name="description" required>
            </div>
            <div class="form-group">
                <label for="unit">Unit:</label>
                <input type="text" class="form-control" name="unit" required>
            </div>
            <div class="form-group">
                <label for="purchaseprice">Purchase Price:</label>
                <input type="number" step="0.01" class="form-control" name="purchaseprice" required>
            </div>
            <div class="form-group">
                <label for="sellingprice">Selling Price:</label>
                <input type="number" step="0.01" class="form-control" name="sellingprice" required>
            </div>
            <div class="form-group">
                <label for="wholesaleprice">Wholesale Price:</label>
                <input type="number" step="0.01" class="form-control" name="wholesaleprice" required>
            </div>
            <div class="form-group">
                <label for="deliverydate">Delivery Date:</label>
                <input type="datetime-local" class="form-control" name="deliverydate" required>
            </div>
            <div class="form-group">
                <label for="supplier">Supplier:</label>
                <input type="text" class="form-control" name="supplier" required>
            </div>
            <button type="submit" class="btn btn-primary">Add Product</button>
        </form>
    </div>
</body>
</html>
