<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// app/Models/Product.php

class Product extends Model
{
    // Produk dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
