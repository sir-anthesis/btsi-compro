<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function errorPage()
    {
        return view('pages/errorPage');
    }
    
    public function about()
    {
        return view('pages/about');
    }
    
    public function faq()
    {
        return view('pages/faq');
    }
    
    public function policyProposal()
    {
        return view('pages/policyProposal');
    }
    
    public function portfolio()
    {
        return view('pages/portfolio');
    }
    
    public function portfolioCarousel()
    {
        return view('pages/portfolioCarousel');
    }
    
    public function portfolioDetails()
    {
        return view('pages/portfolioDetails');
    }
    
    public function pricing()
    {
        return view('pages/pricing');
    }
    
    public function signIn()
    {
        return view('pages/signIn');
    }
    
    public function teamCarousel()
    {
        return view('pages/teamCarousel');
    }
    
    public function teamDetails()
    {
        return view('pages/teamDetails');
    }
    
    public function teamPage()
    {
        return view('pages/teamPage');
    }
    
    public function testimonial()
    {
        return view('pages/testimonial');
    }
    
    public function testimonialCarousel()
    {
        return view('pages/testimonialCarousel');
    }
    
    public function makeaClaimGroup()
    {
        return view('pages/makeaClaimGroup');
    }
    
    public function makeaClaimLoan()
    {
        return view('pages/makeaClaimLoan');
    }
    
    public function makeaClaimMaturity()
    {
        return view('pages/makeaClaimMaturity');
    }
    
    public function makeaClaimOther()
    {
        return view('pages/makeaClaimOther');
    }
    
    public function makeaClaimDeath()
    {
        return view('pages/makeaClaimDeath');
    }

}
