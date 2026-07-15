<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
        'name',
        'price',
        'category_id'
    ];

    // relasi (opsional tapi bagus)
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}