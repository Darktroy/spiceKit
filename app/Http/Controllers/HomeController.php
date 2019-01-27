<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bgImages;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function normalHome() {
        $bkimages = bgImages::all();
        return view('divira.index',compact('bkimages'));
    }
    public function index()
    {
        $name = 'SpiceKitchen';
        return view('companyadminpanel.masterLayout',compact('name'));
//        return view('home');
    }
}
