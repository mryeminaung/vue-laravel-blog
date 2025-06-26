<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    /** @use HasFactory<\Database\Factories\BlogFactory> */
    use HasFactory;

    public $fillable = ['title', 'content', 'slug', 'estimated_read_time', 'author_id', 'blog_id', 'is_published'];

    public function scopeFilter($query, array $filters)
    {
        if ($filters['search'] ?? false) {
            $query->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('content', 'like', '%' . request('search') . '%');
        }

        if ($filters['category'] ?? false) {
            $query->whereHas('categories', function ($query) {
                $query->where('slug', request('category'));
            });
        }

        if ($filters['tag'] ?? false) {
            $query->whereHas('tag', function ($query) {
                $query->where('name', request('tag'));
            });
        }
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'blog_category');
    }
}
