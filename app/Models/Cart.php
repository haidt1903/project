<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable =[
        'user_id',
    ];

    public function Product() {
        return $this->belongsTo(Product::class);
    }

    public function customer()
{
    return $this->belongsTo(User::class);
}

public function items()
{
    return $this->hasMany(CartItem::class);
}

}
