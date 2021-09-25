<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function Reset()
    {
        return view('forget');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('dashboard');
    }
    public function show()
    {
        $users= DB::table('users')->select('id','name','email','password')->get();

        return view('dashboard')->with('users', $users);
    }
}
