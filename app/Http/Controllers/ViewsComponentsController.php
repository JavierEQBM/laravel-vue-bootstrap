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
    public function __construct(){
        $this->middleware('auth')->except(array(
            'home',
            'alerts'
        ));
    }

    public function home(){
        return view('home');
    }

    public function dashboard(){
        return view('dashboard');
    }
   
    public function alerts()
    {
        return view('alerts');
    }
}
