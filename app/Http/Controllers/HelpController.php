<?php

namespace App\Http\Controllers;

class HelpController extends Controller
{
    /**
     * Render main help page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('help');
    }
}
