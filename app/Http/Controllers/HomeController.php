<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Simulation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index()
    {
        return view('welcome');
    }

    public function Privacy()
    {
        return view('privacy');
    }

    public function Terms()
    {
        return view('terms');
    }

    public function Contact()
    {
        return view('contact');
    }

    public function Pricing()
    {
        return view('pricing');
    }

    public function Simulations()
    {
        $simulation_groups = Simulation::with('category.parent')->get()->groupBy('category.parent.name');
        return view('simulations', compact('simulation_groups'));
    }

    public function ListPosts()
    {
        $posts = Post::with('comments')->paginate(10);
        $featured = Post::featured()->with('comments')->latest()->limit(2)->get();
        return view('blog', compact('posts', 'featured'));
    }

    public function GetPost($slug)
    {
        $post = Post::with('comments')->where('slug', $slug)->first();
        return view('single-post', compact('post'));
    }
}
