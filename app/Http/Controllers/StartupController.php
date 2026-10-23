<?php

namespace App\Http\Controllers;

use App\Models\Startup;

class StartupController extends Controller
{
    public function index()
    {
        $startups = Startup::orderBy('id')->get();
        return view('startups.index', compact('startups'));
    }

    public function show(Startup $startup)
    {
        $related = Startup::where('id', '!=', $startup->id)->inRandomOrder()->limit(3)->get();
        return view('startups.show', compact('startup', 'related'));
    }
}
