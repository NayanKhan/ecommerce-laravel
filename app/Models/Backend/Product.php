<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function productimage(){
        return $this->hasMany(ProductsImage::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    
    
}
