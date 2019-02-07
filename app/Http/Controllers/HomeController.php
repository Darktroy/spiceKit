<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bgImages;
use App\Models\menu;
use App\Models\homepage;

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
        $menus = menu::all();
        $homedata = homepage::first();
        return view('divira.index',compact(['bkimages','menus','homedata']));
//        return view('divira.clients.goodsaltz.about',compact(['bkimages','menus']));
    }
    
    public function aboutUs() {
        $bkimages = bgImages::all();
        $menus = menu::all();
        return view('divira.clients.goodsaltz.about',compact(['bkimages','menus']));
//        return view('divira.clients.goodsaltz.about',compact(['bkimages','menus']));
    }
    
    public function index()
    {
        $name = 'SpiceKitchen';
        return view('companyadminpanel.masterLayout',compact('name'));
    }
    
}
