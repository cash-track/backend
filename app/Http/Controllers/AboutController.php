<?php

namespace App\Http\Controllers;

class AboutController extends Controller
{
    /**
     * Render main about page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('about');
    }
}
