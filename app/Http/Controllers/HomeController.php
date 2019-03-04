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

    /**
     * Render Vue's pages
     *
     * @return \Illuminate\View\View
     */
    public function fallback()
    {
        return view('fallback');
    }
}
