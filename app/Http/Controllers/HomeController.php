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
        $posts = Post::with('tags')->simplePaginate(5);
        return view("home.index", compact('posts'));
    }
    public function blog($category_slug = null) 
    {
        $categories = Category::all();
        $posts =  null;
        if ($category_slug != null)
        {
            $category = $categories->where('slug', $category_slug)->firstOrFail();
            $posts = $category
                ->posts()
                ->with('tags')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        }
        else
        {
            $posts = Post::with('tags')
                ->orderBy('created_at', 'desc')
                ->simplePaginate(5);
        }
        
        return view("home.blog", compact('categories', 'posts'));
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
