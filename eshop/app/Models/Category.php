<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table="categories";
    protected $fillables=[
        'name',
        'slug',
        'image',
        'description',
        'status',
        'popular',
        'meta_title',
        'meta_description',
        'meta_keyword',

    ];
}
