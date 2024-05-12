<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'id_category', 'size', 'color', 'available_quantity', 'img'];

    use HasFactory;


    // N - 1
    public function category()
    {
        return $this->belongsTo(Category::class, 'id_category');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
