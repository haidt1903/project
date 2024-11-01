<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =[
        'category_id',
        'user_id',
    ];

    public function Product() {
        return $this->belongsTo(Product::class);
    }
}
