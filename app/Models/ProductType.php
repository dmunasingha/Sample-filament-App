<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model {
    //
    public function products() {
        return $this->morphedByMany(Product::class, 'typeable', 'typeables', 'product_type_id', 'typeable_id');
    }
    public function categories() {
        return $this->morphedByMany(ProductCategory::class, 'typeable', 'typeables', 'product_type_id', 'typeable_id');
    }
}
