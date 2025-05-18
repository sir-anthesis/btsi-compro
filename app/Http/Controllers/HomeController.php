<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Hero;
use App\Models\General;
use App\Models\Accordion;
use App\Models\Highlight;
use App\Models\Partner;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $generals = General::first();
        $heroes = Hero::all();
        $highlights = Highlight::all();
        $accordions = Accordion::all();
        $products = Product::all();
        $customers = Customer::all();
        $partners = Partner::all();

        return view('index', ['generals' => $generals, 'heroes' => $heroes, 'highlights' => $highlights, 'accordions' => $accordions, 'products' => $products, 'customers' => $customers, 'partners' => $partners]);
    }

    public function form(Request $request)
    {
        $userName = $request->input('name');
        $userEmail = $request->input('email');
        $userPhone = $request->input('phone');
        $userMessage = $request->input('message');
        $btsiEmail = General::first()->email;

        $body = "Hi Blue Tide System Indonesia Team,\n\n".
                "I am sending a contact message through your website form. Below are the submitted details:\n\n".
                "Full Name: $userName\n".
                "Email Address: $userEmail\n".
                "Phone Number: $userPhone\n".
                "Message:\n$userMessage\n\n".
                "Best regards,\n$userName";

        return redirect('https://mail.google.com/mail/?view=cm&fs=1&to=' . $btsiEmail . '&su=Contact%20Form%20Message%20-%20Blue%20Tide%20Website&body=' . urlencode($body));
    }
}
