<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

/**
 * Class ProductCategory
 * Represents a product category entity with relationships to products and types.
 * @package App\Models
 */
class ProductCategory extends Model {
    protected $table = 'product_categories';
    protected $fillable = ['name', 'description', 'external_url'];

    public function products() {
        return $this->belongsToMany(Product::class, 'category_product');
    }
    public function types() {
        return $this->morphToMany(ProductType::class, 'typeable');
    }
}
