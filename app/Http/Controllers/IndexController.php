<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function aboutUs()
    {
        return view('about');
    }

    public function howToUse()
    {
        return view('how-to-use');
    }
}
