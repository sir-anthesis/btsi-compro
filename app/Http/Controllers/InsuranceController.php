<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function businessInsurance()
    {
        return view('insurance/businessInsurance');
    }
    
    public function carInsurance()
    {
        return view('insurance/carInsurance');
    }

    public function fireInsurance()
    {
        return view('insurance/fireInsurance');
    }

    public function healthInsurance()
    {
        return view('insurance/healthInsurance');
    }

    public function homeInsurance()
    {
        return view('insurance/homeInsurance');
    }

    public function insurance01()
    {
        return view('insurance/insurance01');
    }

    public function insurance02()
    {
        return view('insurance/insurance02');
    }

    public function insurance03()
    {
        return view('insurance/insurance03');
    }

    public function lifeInsurance()
    {
        return view('insurance/lifeInsurance');
    }

    public function marriageInsurance()
    {
        return view('insurance/marriageInsurance');
    }

    public function travelInsurance()
    {
        return view('insurance/travelInsurance');
    }
}
