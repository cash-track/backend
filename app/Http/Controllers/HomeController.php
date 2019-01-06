<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    /**
     * Render main home page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('home');
    }
}
