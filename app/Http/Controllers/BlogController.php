<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('blogs/Index', [
            'blogs' => BlogResource::collection(
                Blog::filter(request(['search', 'category', 'tag']))->with(['author', 'comments', 'categories'])->paginate(6)->withQueryString()
            ),
            'filters' =>  request()->only(['search', 'category', 'tag']),
            'categories' => Category::select(['id', 'name', 'slug'])->orderBy('id', 'asc')->get(),
            'tags' => Tag::select(['id', 'name'])->orderBy('id', 'asc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return dd('blog create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        return Inertia::render('blogs/BlogDetail', [
            'blog' => new BlogResource(
                $blog->load(['author', 'comments', 'categories'])
            ),
            'relatedBlogs' => BlogResource::collection(
                Blog::with(['author', 'comments', 'categories'])
                    ->where('id', '!=', $blog->id)
                    ->inRandomOrder()
                    ->take(3)
                    ->get()
            ),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();
    }
}
