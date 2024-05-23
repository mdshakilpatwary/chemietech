<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSubCat extends Model
{
    use HasFactory;
    protected $fillable = [
        'cat_id',
        'name',
       
        
    ];

    function category(){
        return $this->belongsTo(ProductCategory::class, 'cat_id', 'id');
     }
}
