<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class AboutMeController extends Controller
{
    function index(): View
    {
        return view('about-me.index');
    }
}
