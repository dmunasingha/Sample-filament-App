<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class ProductCategory extends Model {
    protected $fillable = ['name', 'description', 'url'];
    public function products() {
        return $this->belongsToMany(Product::class, 'category_product', 'product_category_id', 'product_id');
    }

    public function types(): MorphToMany {
        return $this->morphToMany(ProductType::class, 'assignable', 'type_assignments');
    }
}
