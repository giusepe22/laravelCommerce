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
        'recommend'
    ];

    public function images() {// pra saber as imagens relacionada co meu produto

        return $this->hasMany('CodeCommerce\ProductImage'); // 1:N
    }

    public function category() { // pra saber qual categor meu produto esta cadastrada

        return $this->belongsTo('CodeCommerce\Category');  // 1:1
    }

    public function tags(){

        return $this->belongsToMany('CodeCommerce\Tag');
    }

//    public function getNameDescriptionAttribute(){
//
//        return $this->name." - ".$this->description;
//    }

    public function getTagListAttribute(){

        $tags = $this->tags->lists('name');

        return implode('', $tags);
    }

    /**
     * @return ---> consulta de scopo local
     */
    public function scopeFeatured($query) // regra de negocio
    {
        return $query->where('featured', '=', 1);
    }

    /**
     * @return  ---> consulta de scopo Local
     */
    public function scopeRecommend($query) // regra de negocio
    {
        return $query->where('recommend', '=', 1);
    }

    /**
     * @return  --->  scopo Global
     */
    public function scopeOfCategory($query, $type){

        return $query->where('category_id','=', $type);
    }

}
