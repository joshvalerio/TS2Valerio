<?php

namespace App\Models;

use CodeIgniter\Model;

class Products_model extends Model

{
    protected $table = 'tblproducts'; // Your database table
    protected $primaryKey = 'id'; // Primary key
    protected $allowedFields = [
        'barcode',
        'productname',
        'description',
        'unit',
        'purchaseprice',
        'sellingprice',
        'wholesaleprice',
        'deliverydate',
        'supplier',
        'dateencoded' // Include any additional fields as necessary
    ];
}
?>