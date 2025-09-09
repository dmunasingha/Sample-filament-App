<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Product extends Model {

    public function color(): BelongsTo {
        return $this->belongsTo(ProductColor::class, 'product_color_id');
    }

    public function categories(): BelongsToMany {
        return $this->belongsToMany(ProductCategory::class);
    }

    public function types(): MorphToMany {
        return $this->morphToMany(ProductType::class, 'assignable', 'type_assignments');
    }
}
