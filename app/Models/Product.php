<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model {
    use HasFactory;

    public function color() {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }

    public function categories() {
        return $this->belongsToMany(ProductCategory::class, 'category_product', 'product_id', 'product_category_id');
    }

    public function types() {
        return $this->morphToMany(ProductType::class, 'typeable', 'typeables', 'typeable_id', 'product_type_id');
    }
}
