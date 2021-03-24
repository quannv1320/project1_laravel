<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function category()
    {
        return $this->beLongsTo(Category::class, 'cate_id');
    }
    
    public function brand()
    {
        return $this->beLongsTo(Brand::class, 'brand_id');
    }
}
