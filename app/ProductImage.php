<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;

class ProductImage extends Model {

    protected $fillable = [
        'product_id',
        'extension'
    ];

    public function product() {
        return $this->belongsTo('CodeCommerce\Product'); // 1:1
    }
}
