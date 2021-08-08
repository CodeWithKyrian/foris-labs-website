<?php

namespace App\Http\Controllers;

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
}
