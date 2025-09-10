<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeAssignment extends Model {
    protected $table = 'type_assignments';
    protected $fillable = [
        'type_id',
        'assignment_id',
        'my_bonus_field',
    ];

    // Optional: define relationships
    public function type() {
        return $this->belongsTo(ProductType::class, 'type_id');
    }

    public function assignment() {
        return $this->belongsTo(Product::class, 'assignment_id'); // or whatever table
    }
}
