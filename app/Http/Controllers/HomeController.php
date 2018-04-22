<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $request->user()->authorizeRoles(['Super Admin', 'Admin','User']);
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function contoh(Request $request)
    {
        $request->user()->authorizeRoles('User');
        return view('/kemana');
    }
}
