<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /** @use HasFactory<\Database\Factories\CategoryFactory> */
    use HasFactory;

    public $fillable = ['name', 'slug'];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class, 'blog_category');
    }
}
