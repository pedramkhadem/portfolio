<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('frontend.index');
    }
    public function resume()
    {
        return view('frontend.resume');
    }

    public function projects()
    {
        return view('frontend.projects');
    }
    public function contact()
    {
        return view('frontend.contact');
    }
}
