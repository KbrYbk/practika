<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Basket extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'product_id',
    ];
<<<<<<< HEAD
    public function prod() {
        return $this->hasOne(product::class, 'id','product_id');
    }
=======
>>>>>>> 3c259c04aaa426ebd4405d1b71afaadd462e6534
}
