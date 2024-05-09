<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    protected $fillable = ['id_user', 'sale_date', 'total_price'];

    use HasFactory;


    // N - 1
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //este si no sabo
    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
