<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphedByMany;

class ProductType extends Model {

    public function products(): MorphedByMany {
        return $this->morphedByMany(Product::class, 'assignable', 'type_assignments');
    }

    public function categories(): MorphedByMany {
        return $this->morphedByMany(ProductCategory::class, 'assignable', 'type_assignments');
    }
}
