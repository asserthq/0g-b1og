<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;

class HomeController extends Controller
{
    public function index() 
    {
        $posts = Post::with('tags')
            ->orderBy('created_at', 'desc')
            ->limit(3)
            ->get();

        return view("home.index", compact('posts'));
    }

    public function blog($category_slug = null) 
    {
        $categories = Category::all();
        $posts =  null;
        $category_filter = null;
        if ($category_slug != null)
        {
            $category_filter = $categories->where('slug', $category_slug)->firstOrFail();
            $posts = $category_filter
                ->posts()
                ->with('tags')
                ->orderBy('created_at', 'desc')
                ->paginate(3);
        }
        else
        {
            $posts = Post::with('tags')
                ->orderBy('created_at', 'desc')
                ->paginate(3);
        }
        
        return view("home.blog", compact('categories', 'posts', 'category_filter'));
    }

    public function tags() 
    {
        $tags = Tag::all();
        return view("home.tags", compact('tags'));
    }

    public function categories() 
    {
        $categories = Category::all();
        return view("home.categories", compact('categories'));
    }

    public function article($slug) 
    {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->views_count += 1;
        $post->update();
        return view("home.article", compact('post'));
    }
}
