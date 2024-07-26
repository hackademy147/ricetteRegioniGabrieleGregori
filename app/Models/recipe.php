<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recipe extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'region', 'description', 'cover', 'user_id', 'category_id'];
}
