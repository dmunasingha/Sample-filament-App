<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model {
    protected $fillable = ['name', 'description', 'url'];
    public function products() {
        return $this->belongsToMany(Product::class, 'category_product', 'product_category_id', 'product_id');
    }

    public function types() {
        return $this->morphToMany(ProductType::class, 'typeable', 'typeables', 'typeable_id', 'product_type_id');
    }
}
