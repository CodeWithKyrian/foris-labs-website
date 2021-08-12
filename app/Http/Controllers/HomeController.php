<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Role;
use App\Models\Simulation;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function Index()
    {
        $members = User::admins()->get();
        return view('welcome', compact('members'));
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
        $posts = Post::paginate(10);
        $featured = Post::featured()->latest()->limit(2)->get();
        return view('blog', compact('posts', 'featured'));
    }

    public function GetPost($slug)
    {
        $post = Post::with('comments')->where('slug', $slug)->first();
        $recent_posts = Post::latest()->limit(5)->get();
        return view('single-post', compact('post', 'recent_posts'));
    }

    public function RegisterAffiliate(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make(123456),
            'profile_img' => '/img/avatar.png'
        ]);

        $affiliate_role = Role::query()->where('slug', 'affiliate')->first();
        $user->roles()->attach($affiliate_role);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::AFFILIATE_HOME);
    }
}
