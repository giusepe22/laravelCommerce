<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;
use CodeCommerce\ProductImage;
use CodeCommerce\Category;


class Product extends Model {

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'price',
        'featured',
        'recommended'
    ];

    public function images() {// pra saber as imagens relacionada co meu produto

        return $this->hasMany('CodeCommerce\ProductImage'); // 1:N
    }

    public function category() { // pra saber qual categor meu produto esta cadastrada

        return $this->belongsTo('CodeCommerce\Category');  // 1:1
    }

}
