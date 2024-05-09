<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'description', 'price', 'id_subcategory', 'size', 'color', 'available_quantity', 'img'];

    use HasFactory;


    // N - 1
    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class, 'id_subcategory');
    }

    public function sales()
    {
        return $this->belongsToMany(Sale::class);
    }
}
