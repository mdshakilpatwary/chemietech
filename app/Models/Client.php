<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;
    protected $fillable = [
        'clientCat_id',
        'image',       
    ];

    function clientCat(){
        return $this->belongsTo(ClientCategory::class, 'clientCat_id', 'id');
     }
}
