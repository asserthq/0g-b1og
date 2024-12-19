<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Tag;

class HomeController extends Controller
{
    public function index() 
    {
        $posts = Post::with('tags')->simplePaginate(5);
        return view("pages.index", compact('posts'));
    }
    public function blog() 
    {
        return view("pages.blog");
    }

    public function projects() 
    {
        return view("pages.projects");
    }
    public function tags() 
    {
        $tags = Tag::simplePaginate(15);
        return view("pages.tags", compact('tags'));
    }
    public function about() 
    {
        return view("pages.about");
    }
    public function article() 
    {
        return view("pages.article-sidebar");
    }
}
