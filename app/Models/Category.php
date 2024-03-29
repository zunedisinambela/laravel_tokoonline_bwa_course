<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'name', 'photo', 'slug'
    ];

    protected $hidden = [];
}
