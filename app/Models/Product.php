<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    protected $fillable =[
        'title',
        'category_id',
        'price',
        'discount_price',
        'sub_category_id',
        'short_description',
        'long_description',
        'slug',
        'meta_title',
        'meta_description',
        'status',
        'image'
    ];

}
