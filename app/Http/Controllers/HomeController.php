<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use App\Models\General;
use App\Models\Accordion;
use App\Models\Highlight;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $generals = General::first();
        $heroes = Hero::all();
        $highlights = Highlight::all();
        $accordions = Accordion::all();

        return view('index', ['generals' => $generals, 'heroes' => $heroes, 'highlights' => $highlights, 'accordions' => $accordions]);
    }
}
