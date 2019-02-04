<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsComponentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function alerts()
    {
        return view('alerts')->with(array('test' => 100));
    }
}
