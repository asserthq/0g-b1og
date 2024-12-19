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
        return view("pages.index", compact('posts'));
    }
    public function blog() 
    {
        $categories = Category::all();
        $posts = Post::with('tags')->simplePaginate(5);
        return view("pages.blog", compact('categories', 'posts'));
    }
    public function tags() 
    {
        $tags = Tag::all();
        return view("pages.tags", compact('tags'));
    }
    public function categories() 
    {
        $categories = Category::all();
        return view("pages.categories", compact('categories'));
    }
    public function article($slug) 
    {
        $post = Post::findBySlug($slug);
        return view("pages.article", compact('post'));
    }
}
