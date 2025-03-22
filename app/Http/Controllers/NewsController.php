<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function newsCarousel()
    {
        return view('news/newsCarousel');
    }
    
    public function newsDetails()
    {
        return view('news/newsDetails');
    }
    
    public function newsSidebarLeft()
    {
        return view('news/newsSidebarLeft');
    }
    
    public function newsSidebar()
    {
        return view('news/newsSidebar');
    }
    
    public function news()
    {
        return view('news/news');
    }

}
