<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name',
        'price',
        'img',
        'user_id',
        'status'
        
     
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
