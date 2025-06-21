<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
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
                Blog::with(['author', 'comments'])->paginate(3)
            ),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
                $blog->load(['author', 'comments'])
            ),
            'relatedBlogs' => BlogResource::collection(
                Blog::with(['author', 'comments'])
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
