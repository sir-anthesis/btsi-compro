<?php

namespace App\Http\Controllers;

use App\Models\General;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $generals = General::first();

        return view('index', ['generals' => $generals]);
    }
}
