<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'cat_id',
        'subcat_id',
        'name',
        'image',
        'description',
       
        
    ];

    function category(){
        return $this->belongsTo(ProductCategory::class, 'cat_id', 'id');
     }
    function subcategory(){
        return $this->belongsTo(ProductSubCat::class, 'subcat_id', 'id');
     }
}
