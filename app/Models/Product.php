<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Builder;

/**
 * Class Product
 * Represents a product entity with relationships to colors, categories, and types.
 * @package App\Models
 */
class Product extends Model {
    protected $fillable = ['name', 'product_category_id', 'product_color_id', 'description'];

    public function categories() {
        return $this->belongsTo(ProductCategory::class, 'product_category_id');
    }

    public function color() {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }

    public function types() {
        return $this->morphToMany(ProductType::class, 'assignment', 'type_assignments')->withPivot('my_bonus_field');
    }

    public function typeAssignments() {
        return $this->hasMany(TypeAssignment::class, 'assignment_id');
    }
}
