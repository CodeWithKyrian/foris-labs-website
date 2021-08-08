<?php

namespace App\Http\Controllers;

use App\Models\Simulation;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function Dashboard()
    {
        $simulations = Simulation::with('category.parent')->get()->countBy(function ($simulation){
            return $simulation->category->parent->name;
        })->all();
        return view('admin.dashboard', compact('simulations'));
    }

    public function Simulations()
    {
        $simulation_groups = Simulation::with('category.parent')->get()->groupBy('category.parent.name');
        return view('admin.simulations', compact('simulation_groups'));
    }
}
