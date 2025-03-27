<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function article()
    {
        return view('article');
    }

    public function practice()
    {
        return view('privacy');
    }

    public function team()
    {
        return view('teams.team');
    }
    
}
