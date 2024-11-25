<?php
namespace App\Controllers;

class Products extends BaseController {
    
    public function index() {
        $productModel = model('Products_model');

        // Use findAll() to get all products
        $data['products'] = $productModel->findAll(); 
        // dd($data['products']); // Uncomment for debugging

        $data['title'] = "Product Management";

        return view('include/header', $data)
            . view('include/navbar')
            . view('products_view', $data) // Ensure this view exists
            . view('include/footer');
    }

    public function add() {
        if ($this->request->is('POST')) {
            // Load model
            $productsModel = model('Products_model');

            // Retrieve data from form
            $productData = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);

            // Insert data into the table
            $productsModel->insert($productData);

            // Redirect to the products list page
            return redirect()->to('/products');
        }

        $data['title'] = "Add New Product";

        return view('include/header', $data)
            . view('include/navbar')
            . view('add_product_view', $data)
            . view('include/footer');
    }

    public function edit($id = 0) {
        $productsModel = model('Products_model');

        if ($this->request->is('POST')) {
            // Retrieve data from form
            $updatedData = $this->request->getPost([
                'barcode',
                'productname',
                'description',
                'unit',
                'purchaseprice',
                'sellingprice',
                'wholesaleprice',
                'deliverydate',
                'supplier',
            ]);

            // Update data in the table
            $productsModel->update($id, $updatedData);

            // Redirect to the products list page
            return redirect()->to('/products');
        }

        // Retrieve the data from the table
        $data['product'] = $productsModel->find($id);  // Replaces where() and first()
        $data['title'] = "Edit Product";

        return view('include/header', $data)
            . view('include/navbar')
            . view('edit_product_view', $data) // Ensure this view exists
            . view('include/footer');
    }

    public function view($id = 0) {
        // Load the model
        $productsModel = model('Products_model');

        // Retrieve the data from the table
        $data['product'] = $productsModel->find($id);  // Replaces where() and first()
        
        $data['title'] = "View Product";

        return view('include/header', $data)
            . view('include/navbar')
            . view('view_product', $data)
            . view('include/footer');
    }

    public function delete($id = 0) {
        // Load the model
        $productsModel = model('Products_model');
        $productsModel->delete($id);  // Deletes the product by ID
        return redirect()->to('/products');
    }
}
