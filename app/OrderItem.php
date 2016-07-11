<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
        'product_id',
        'price',
        'qtd'
    ];

    protected $table = 'order_items'; // pra acessar a table certa

    public function order(){

        return $this->belongsTo('CodeCommerce\Order');
    }

}
