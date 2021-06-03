<?php

namespace App\Http\Controllers;
use App\Models\blood_inventory;
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
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }
    // ------------------- [ User logout function ] ----------------------
    public function logout(Request $request ) {
        $request->session()->flush();
         
        return Redirect('/login');
}

}