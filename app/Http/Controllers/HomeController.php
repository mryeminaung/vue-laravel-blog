<?php

namespace App\Http\Controllers;

use App\Http\Resources\BlogResource;
use App\Models\Blog;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return Inertia::render('Welcome', ['blogs' => BlogResource::collection(
            Blog::with(['author', 'comments', 'categories'])
                ->inRandomOrder()
                ->take(6)
                ->get()
        ),]);
    }
}
