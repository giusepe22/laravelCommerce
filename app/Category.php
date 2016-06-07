<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        #'product_id',
        'name',
        'description'
    ];

    public function products(){// listar todos os nossos produtos que estao ligado a essa category

      return $this->hasMany('CodeCommerce\Product'); // 1:N
    }
}
